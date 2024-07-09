<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('auth.register');
        }
        $request->validate([
            'name' => 'required|string',
            'phonenumber' => 'required|iran_mobile',
            'password' => 'required|min:6',
            'terms' => 'required|max:2',
        ]);

        try {

            $user = User::where('phonenumber', $request->username)->get();
            if ($user->first() == null) {

                DB::beginTransaction();
                $user = User::create([
                    'name' => $request->name,
                    'phonenumber' => $request->phonenumber,
                    'email' => $request->email,
                    'password' => $request->password,

                ]);

                $customer = Customer::create([
                    'user_id' => $user->id,
                ]);


                DB::commit();
                Alert::success('اطلاعات شما در سیستم ایجاد شد', 'باتشکر');
                auth()->logout();
                return redirect()->route('login');
            } else {
                return redirect()->back()->with('errors', "اطلاعات شما قبلا در سیستم ثبت شده است.");

            }

        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        }


    }

}
