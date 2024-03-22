<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitMeasurement;
use App\Models\Ostan;
use App\Models\Shahrestan;
use RealRashid\SweetAlert\Facades\Alert;

class UnitMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('unitmeasurement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('unitmeasurement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'symptom' => 'required',
        ], $messages = [
            'name.required' => 'واحد اندازه‌گیری نباید خالی باشد',
            'symptom.required' => 'سمبل واحد اندازه‌گیری نباید خالی باشد',

        ]);
        try {
            UnitMeasurement::create([
                'name' => $request->name,
                'symptom' => $request->symptom
            ]);
            Alert::success('واحد اندازه‌گیری مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('unitMeasurement.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات اندازه‌گیری تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات واحد اندازه گیری تکراری و یا اشتباه است', 'خطا');
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
        $unitMeasurement = UnitMeasurement::where('id', $id)->get()->first();
        return view('unitmeasurement.edit', compact('unitMeasurement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnitMeasurement $unitmeasurement)
    {// dd( $unitmeasurement);
         $request->validate([
            'name' => 'required',
            'symptom' => 'required',

        ], $messages = [
            'name.required' => 'واحد اندازه‌گیری نباید خالی باشد',
            'symptom.required' => 'سمبل واحد اندازه‌گیری نباید خالی باشد',
        ]);
        try {
            $unitmeasurement->update([
                'name' => $request->name,
                'symptom' => $request->symptom,
            ]);
            Alert::success('واحد اندازه گیری مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('unitMeasurement.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات واحد اندازه گیری تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات واحد اندازه گیری تکراری و یا اشتباه است', 'خطا');
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
        $data_companies = UnitMeasurement::paginate();
        $code = 200;
        return response()->json(
            $data_companies,
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
