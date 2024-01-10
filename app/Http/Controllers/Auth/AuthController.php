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
            'cellphone'=>'required|iran_mobile'
        ]);
        try{
            $user=User::where('cellphone',$request->cellphone)->where('role','admin')->first();
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
    public function checkOtp(Request $request)
    {
        $request->validate([
            'otp'=>'required|digits:5',
            'cellphone'=>'required'
        ]);
         try{
      $user=User::where('cellphone',$request->cellphone)->firstOrFail();
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
            'cellphone'=>'required'
        ]);
        try{
            $user=User::where('cellphone',$request->cellphone)->firstOrFail();
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
