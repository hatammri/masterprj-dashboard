<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Ostan;
use App\Models\Company;
use App\Models\Rule;
use App\Models\Shahrestan;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::all();
        $rule = Rule::all();

        return view('customer.create', compact('company','rule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'description' => 'required',
            'company' => 'required',
            'rule' => 'required'
        ], $messages = [
            'name.required' => 'نام مشتری نباید خالی باشد',
            'email.required' => 'ایمیل نباید خالی باشد',
            'phonenumber.required' => 'شماره همراه نباید خالی باشد',
            'description.required' => 'توضیحات نباید خالی باشد',
            'company.required' =>  'شرکت نباید خالی باشد',
            'rule.required' =>  'نقش نباید خالی باشد',
        ]);
      //  try {
            Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'description' => $request->description,
                'company' =>  $request->company,
                'rule' => $request->rule,
            ]);
            Alert::success('مشتری مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('customer.index');
      //  } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            // Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            // return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        // } catch (\Exception $e) {
        //     Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
        //     return redirect()->back();
        // }
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
    public function edit(string $id)
    {
        $customer = Customer::where('id', $id)->get()->first();
        $company= Company::where('id',$customer->company)->get()->first();
        $rule=Rule::where('id',$customer->rule)->get()->first();
        $companyall = Company::all();
        $ruleall = Rule::all();
        return view('customer.edit', compact('customer', 'company', 'rule', 'companyall', 'ruleall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    { //dd($request,$customer);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'description' => 'required',
            'company' => 'required',
            'rule' => 'required'
        ], $messages = [
            'name.required' => 'نام مشتری نباید خالی باشد',
            'email.required' => 'ایمیل نباید خالی باشد',
            'phonenumber.required' => 'شماره همراه نباید خالی باشد',
            'description.required' => 'توضیحات نباید خالی باشد',
            'company.required' =>  'شرکت نباید خالی باشد',
            'rule.required' =>  'نقش نباید خالی باشد',
        ]);

        try {
            $customer->update([
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'description' => $request->description,
                'company' =>  $request->company,
                'rule' => $request->rule,
            ]);
            Alert::success('مشتری مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('customer.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function datatable()
    {   $customers = Customer::with(['companies:id,name','rlues:id,name'])->paginate();

        return response()->json(
            $customers,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );

    }


}
