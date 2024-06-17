<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Equipment;
use App\Models\RequestWork;
use App\Models\Company;
use App\Models\UnitMeasurement;
use App\Models\Pm;


use RealRashid\SweetAlert\Facades\Alert;

class PmController extends Controller
{
    public function index()
    {
        return view('pm.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $requestwork = RequestWork::all();
        $equipment = Equipment::all();
        $company = Company::all();


        return view('pm.create', compact('requestwork','equipment','company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'equipment_number' => 'required',
            'requestwork_id' => 'required',
            'equipment_id' => 'required',
            'company_id' => 'required',
            'equipment_name_Alias' => 'required',
            'installation_location' => 'required'

        ], $messages = [
            'equipment_number.required' => 'شماره سریال تجهیز  نباید خالی باشد',
            'requestwork_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
            'equipment_id.required' => ' نام تجهیز نباید خالی باشد',
            'company_id.required' => '  نام شرکت  نباید خالی باشد',
            'equipment_name_Alias.required' => ' نام مستعار تجهیز  نباید خالی باشد',
            'installation_location.required' => ' محل نصب  نباید خالی باشد',


        ]);
        try {
            Pm::create([
                'equipment_number' => $request->equipment_number,
                'requestwork_id' => $request->requestwork_id,
                'equipment_id' => $request->equipment_id,
                'company_id' => $request->company_id,
                'equipment_name_Alias' => $request->equipment_name_Alias,
                'installation_location' => $request->installation_location,

            ]);
            Alert::success('pm مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('pm.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات pm تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات pm تکراری و یا اشتباه است', 'خطا');
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
            Alert::success('pm مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('specialty.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات pm تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات pm تکراری و یا اشتباه است', 'خطا');
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
        $data_pm = Pm::with(['requestworks:id,request_number','equipments:id,name','companies:id,name'])->paginate();
        $code = 200;
        return response()->json(
            $data_pm,
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
