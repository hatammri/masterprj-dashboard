<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Ostan;
use App\Models\UnitMeasurement;
use RealRashid\SweetAlert\Facades\Alert;

class SpecialtyController extends Controller
{
    public function index()
    {
        return view('specialty.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $UnitMeasurement = UnitMeasurement::all();
        return view('specialty.create', compact('UnitMeasurement'));
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
           return redirect()->route('specialty.index');
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
        $ostan_select = Ostan::where('name', $specialty->state)->get()->first();
        $shahrestan_select = shahrestan::where('name', $specialty->city)->get()->first();
        $ostan = Ostan::all();
        $shahrestan = Shahrestan::all();
        return view('specialty.edit', compact('specialty', 'ostan_select', 'shahrestan_select', 'ostan', 'shahrestan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialty $specialty)
    { //dd($request,$specialty);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required'
        ], $messages = [
            'name.required' => 'نام تخصص نباید خالی باشد',
            'email.required' => 'ایمیل نباید خالی باشد',
            'phonenumber.required' => 'شماره همراه نباید خالی باشد',
            'address' => 'آدرس نباید خالی باشد',
            'state' =>  'استان نباید خالی باشد',
            'city' =>  'شهرستان نباید خالی باشد',

        ]);
        try {
            $ostan_name = Ostan::where('id', $request->state)->value('name');
            $Shahrestan_name = Shahrestan::where('id', $request->city)->value('name');
            $specialty->update([
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'address' => $request->address,
                'state' => $ostan_name,
                'city' => $Shahrestan_name,
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
