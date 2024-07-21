<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Ostan;
use App\Models\Company;
use App\Models\Role;
use App\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {     $customers =Customer::with(['companies:id,name', 'postCompany', 'userID.getrole'])->get();
          return view('customer.index',compact('customers'));
    }
    public function indexprofile()
    {     //$customers =Customer::with(['companies:id,name', 'postCompany', 'userID.getrole'])->get();
        $company = Company::all();
        $role = Role::all();
        $permissions = Permission::all();
          return view('customerprofile.indexprofile', compact('company', 'role', 'permissions'));
    }
    public function security()
    {     //$customers =Customer::with(['companies:id,name', 'postCompany', 'userID.getrole'])->get();
        $company = Company::all();
        $role = Role::all();
        $permissions = Permission::all();
          return view('customerprofile.indexprofile', compact('company', 'role', 'permissions'));    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::all();
        $role = Role::all();
        $permissions = Permission::all();

        return view('customer.create', compact('company', 'role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required',
            'company' => 'required',
            'post_incompany' => 'required',
            'role' => 'required',
        ], $messages = [
                'name.required' => 'نام مشتری نباید خالی باشد',
                'phonenumber.required' => 'شماره همراه نباید خالی باشد',
                'company.required' => 'شرکت نباید خالی باشد',
                'post_incompany.required' => 'سمت مشترس  در شرکت نباید خالی باشد',
                'role.required' => 'نوع دسترسی مشتری نباید خالی باشد',
                'is_active.required' => 'وضعیت مشتری در سیستم نباید خالی باشد',

            ]);

        // try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'phonenumber' => $request->phonenumber,
                'email' => $request->email,
                'role' => $request->role,
                'is_active' => $request->is_active
            ]);

            $customer = Customer::create([
                'user_id' => $user->id,
                'description' => $request->description,
                'company' => $request->company,
                'post_incompany' => $request->post_incompany,
            ]);


            DB::commit();


        // } catch (\Illuminate\Database\QueryException $e) {
        //     //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
        //     Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
        //     return back();
        //     //     // Just some example
        //     //     //dd($e->getMessage(), $e->errorInfo);
        // } catch (\Exception $e) {
        //     Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
        //     return redirect()->back();
        // }
        Alert::success('مشتری مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $data)
    {
        dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $customer = Customer::with(['userID'])->where('id', $id)->get()->first();
        $user =User::where('id',$customer->user_id)->get()->first();
        $company = Company::where('id', $customer->company)->get()->first();
        $role = Role::where('id', $customer->role)->get()->first();
        $companyall = Company::all();
        $roleall = Role::all();
        $permissions = Permission::all();
        return view('customer.edit', compact('customer','user', 'company', 'role', 'companyall', 'roleall', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required',
            'company' => 'required',
            'post_incompany' => 'required',
            'role' => 'required',
        ], $messages = [
                'name.required' => 'نام مشتری نباید خالی باشد',
                'phonenumber.required' => 'شماره همراه نباید خالی باشد',
                'company.required' => 'شرکت نباید خالی باشد',
                'post_incompany.required' => 'سمت مشترس  در شرکت نباید خالی باشد',
                'role.required' => 'نوع دسترسی مشتری نباید خالی باشد',
            ]);

        DB::beginTransaction();

        $customer->update([
            'description' => $request->description,
            'company' => $request->company,
            'post_incompany' => $request->post_incompany,
        ]);

         User::where('id', $customer->user_id)
        ->update(['name' => $request->name,
        'phonenumber' => $request->phonenumber,
        'email' => $request->email,
        'role' => $request->role,
        'is_active' => $request->is_active

    ]);


        $role_find = Role::where('id', $request->role)->get()->first();
        $user = User::where('id', $customer->user_id)->get()->first();
        $user->syncRoles($role_find->name);
        $permissions = $request->except('_token', '_method', 'name', 'email', 'phonenumber', 'description', 'company', 'post_incompany', 'role', 'is_active');
        $user->givePermissionTo($permissions);
        DB::commit();


        Alert::success('مشتری مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function datatable()
    {
        $customers = Customer::with(['companies:id,name', 'post_incompany:id,display_name', 'userID:id,name,email,is_active,phonenumber'])->get();
        return response()->json(
            $customers,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );

    }


}
