<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Ostan;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\UnitMeasurement;
use RealRashid\SweetAlert\Facades\Alert;

class RequestworkController extends Controller
{
    public function index()
    {
        return view('requestwork.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Customer = Customer::all();
        $Equipment = Equipment::all();

        return view('requestwork.create', compact('Customer','Equipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'unitmeasurement' => 'required',
            'numberofoperator' => 'required',

        ], $messages = [
            'name.required' => 'نام تخصص نباید خالی باشد',
            'unitmeasurement.required' => 'واحد اندازه‌گیری نباید خالی باشد',
            'numberofoperator.required' => 'تعداد اپراتور نباید خالی باشد',

        ]);
        try {
            Specialty::create([
                'name' => $request->name,
                'unitmeasurement' => $request->unitmeasurement,
                'numberofoperator' => $request->numberofoperator,
            ]);
            Alert::success('تخصص مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('requestwork.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات تخصص تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات تخصص تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        }
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
        $specialty = Specialty::where('id', $id)->get()->first();
       // dd($specialty->unitmeasurement);

        $UnitMeasurement_select = UnitMeasurement::where('id', $specialty->unitmeasurement)->get()->first();
        // $shahrestan_select = shahrestan::where('name', $specialty->city)->get()->first();
        $UnitMeasurement = UnitMeasurement::all();
        $operatorarray = ["1", "2", "3","4","5","6","7","8","9","10"];
        return view('specialty.edit', compact('specialty', 'UnitMeasurement_select', 'UnitMeasurement','operatorarray'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialty $specialty)
    { //dd($request,$specialty);
        $request->validate([
            'name' => 'required',
            'unitmeasurement' => 'required',
            'numberofoperator' => 'required',
        ], $messages = [
            'name.required' => 'نام تخصص نباید خالی باشد',
            'unitmeasurement.required' => 'واحد اندازه گیری نباید خالی باشد',
            'numberofoperator.required' => 'تعداد اپراتور نباید خالی باشد',


        ]);
        try {
            $specialty->update([
                'name' => $request->name,
                'unitmeasurement' => $request->unitmeasurement,
                'numberofoperator' => $request->numberofoperator,

            ]);
            Alert::success('تخصص مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('specialty.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات تخصص تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات تخصص تکراری و یا اشتباه است', 'خطا');
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
        $data_Specialties = Specialty::with(['unitmeasurements:id,name'])->paginate();
        $code = 200;
        return response()->json(
            $data_Specialties,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getShahrestanList(Request $request)
    {
        $shahrestan = Shahrestan::where('ostan', $request->ostan)->get();
        return $shahrestan;
    }
}
