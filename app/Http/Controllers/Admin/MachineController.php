<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machine;
use App\Models\Ostan;
use App\Models\UnitMeasurement;
use RealRashid\SweetAlert\Facades\Alert;

class machineController extends Controller
{
    public function index()
    {
        return view('machine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $UnitMeasurement = UnitMeasurement::all();
        return view('machine.create', compact('UnitMeasurement'));
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
            'name.required' => 'نام ماشین نباید خالی باشد',
            'unitmeasurement.required' => 'واحد اندازه‌گیری نباید خالی باشد',
            'numberofoperator.required' => 'تعداد اپراتور نباید خالی باشد',

        ]);
        try {
            machine::create([
                'name' => $request->name,
                'unitmeasurement' => $request->unitmeasurement,
                'numberofoperator' => $request->numberofoperator,
            ]);
            Alert::success('ماشین مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('machine.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات ماشین تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات ماشین تکراری و یا اشتباه است', 'خطا');
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
        $machine = machine::where('id', $id)->get()->first();
       // dd($machine->unitmeasurement);

        $UnitMeasurement_select = UnitMeasurement::where('id', $machine->unitmeasurement)->get()->first();
        // $shahrestan_select = shahrestan::where('name', $machine->city)->get()->first();
        $UnitMeasurement = UnitMeasurement::all();
        $operatorarray = ["1", "2", "3","4","5","6","7","8","9","10"];
        return view('machine.edit', compact('machine', 'UnitMeasurement_select', 'UnitMeasurement','operatorarray'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, machine $machine)
    { //dd($request,$machine);
        $request->validate([
            'name' => 'required',
            'unitmeasurement' => 'required',
            'numberofoperator' => 'required',
        ], $messages = [
            'name.required' => 'نام ماشین نباید خالی باشد',
            'unitmeasurement.required' => 'واحد اندازه گیری نباید خالی باشد',
            'numberofoperator.required' => 'تعداد اپراتور نباید خالی باشد',


        ]);
        try {
            $machine->update([
                'name' => $request->name,
                'unitmeasurement' => $request->unitmeasurement,
                'numberofoperator' => $request->numberofoperator,

            ]);
            Alert::success('ماشین مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('machine.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات ماشین تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات ماشین تکراری و یا اشتباه است', 'خطا');
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
        $data_Specialties = machine::with(['unitmeasurements:id,name'])->paginate();
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
