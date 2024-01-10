<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if($request->method()=='GET'){
            return view('auth.register');
        }
        $request->validate([
            'name' => 'required|string',
            'cellphone'=>'required|iran_mobile',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'terms'=>'required|max:2',
        ]);

        try{
            $user=User::where('cellphone',$request->cellphone)->where('email',$request->email)->first();
            if($user){
               // alert()->error('خطا', 'شما قبلا ثبت نام کرده اید');
               return response('errors',422);
                return redirect()->route('register');
             }
             else{
                User::create([
                    'name' => $request->name,
                    'cellphone'=>$request->cellphone,
                    'avatar'=>'4.png',
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'role'=>'Guest',
                    'position'=>'مهمان',
                ]);
           //     alert()->success('ثبت نام موفق', 'باتشکر');
                return redirect()->route('login');
             }
        }catch(\Exception $ex){
            return response(['errors'=>$ex->getMessage()],422);

        }
}

}
