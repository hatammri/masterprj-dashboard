<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OTPSms;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->method()=='GET'){
            return view('auth.login');
        }

            $request->validate([
            'phonenumber'=>'required|iran_mobile'
        ]);
        try{
            $user=User::where('phonenumber',$request->phonenumber)->first();
            $OTPCode=mt_rand(10000,99999);
            $loginToken =Hash::make('DCDVFBVYJJ!@EDFRdgthjngrNHBVF');
            if($user){
             $user->update([
            'otp'=>$OTPCode,
            'login_token' =>$loginToken
         ]);
         $user->notify(new OTPSms($OTPCode));
         return view('auth.two_steps' , compact('user'));
       }else{

        return redirect()->back()->with('errors',"شما اجازه ورود ندارید." );

       }

        }catch(\Exception $ex){
            return redirect()->back()->with('errors',"خطا چنانچه امکان ورود ندارید با پیشتیبانی در تماس باشید." );

        }

    }

    public function login_with_user_pass(Request $request)
    {
        if($request->method()=='GET'){
            return view('auth.login_with_user_pass');
        }

            $request->validate([
            'username'=>'required',
            'password'=>'required',

        ]);



            $user =User::where('phonenumber',$request->username)
            ->orWhere('username', $request->username)
            ->get();
            if ($user->first()==null) {

                return redirect()->back()->with('errors',"نام کاربری یا شماره همراه در سیستم ثبت نشده است." );

               }

           if($user[0]->password==$request->password)
            {
              auth()->login($user[0],$remember=true);
              return redirect()->route('dashboard');
            }
            else
            {
        return redirect()->back()->with('errors',"رمز عبور به درستی وارد نشده است" );

      }



    }

    public function checkOtp(Request $request)
    {
        $request->validate([
            'otp'=>'required|digits:5',
            'phonenumber'=>'required'
        ]);
         try{
      $user=User::where('phonenumber',$request->phonenumber)->firstOrFail();
      if($user->otp==$request->otp)
      {
        auth()->login($user,$remember=true);
       // return redirect('/');
       return redirect()->route('dashboard');


      }else
      {
        return view('auth.two_steps' , compact('user'));

      }
    }catch(\Exception $ex){
        return redirect()->back()->with('errors',"خطا درهنگام ورود با پشتیبانی تماس بگیرید." );

    }
    }
    public function resendOtp(Request $request)
    {
        $request->validate([
            'phonenumber'=>'required'
        ]);
        try{
            $user=User::where('phonenumber',$request->phonenumber)->firstOrFail();
            $OTPCode=mt_rand(10000,99999);
            $loginToken =Hash::make('DCDVFBVYJJ!@EDFRdgthjngrNHBVF');
          $user->update([
            'otp'=>$OTPCode,
            'login_token'=>$loginToken
          ]);
       $user->notify(new OTPSms($OTPCode));
       return response(['login_token'=>$loginToken],200);
        }catch(\Exception $ex){
            return response(['errors'=>$ex->getMessage()],422);

        }

    }
}
