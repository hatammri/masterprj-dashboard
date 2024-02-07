<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Equipment;
use App\Models\Rule;
use App\Models\TypeEquipment;
use RealRashid\SweetAlert\Facades\Alert;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('equipment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::all();
        $typeEquipment = TypeEquipment::all();
        return view('equipment.create', compact('brand','typeEquipment'));
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
            Equipment::create([
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'description' => $request->description,
                'company' =>  $request->company,
                'rule' => $request->rule,
            ]);
            Alert::success('مشتری مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('equipment.index');
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
        $equipment = Equipment::where('id', $id)->get()->first();
        $company= Equipment::where('id',$equipment->company)->get()->first();
        $rule=Rule::where('id',$equipment->rule)->get()->first();
        $companyall = Equipment::all();
        $ruleall = Rule::all();
        return view('equipment.edit', compact('equipment', 'company', 'rule', 'companyall', 'ruleall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    { //dd($request,$equipment);

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
            $equipment->update([
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'description' => $request->description,
                'company' =>  $request->company,
                'rule' => $request->rule,
            ]);
            Alert::success('مشتری مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('equipment.index');
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
    {
        $data_equipment = Equipment::paginate();
        $code = 200;
        return response()->json(
            $data_equipment,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }


}
