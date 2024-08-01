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
use App\Models\Part;
use App\Models\Brand;
use App\Models\PmPart;


use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class PmController extends Controller
{
    public function index()
    {
        $pm=Pm::with('requestworks','equipments','companies')->get();
        return view('pm.index',compact('pm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $requestwork = RequestWork::all()->unique('equipment_number');
        $requestworkwithoutunique = RequestWork::all();
        $equipment = Equipment::all();
        $company = Company::all();
        $Part = Part::all();
        $Brand = Brand::all();


        return view('pm.create', compact('requestwork', 'equipment', 'company', 'Part', 'Brand', 'requestworkwithoutunique'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'requestwork_id' => 'required',

        ], $messages = [
                'requestwork_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',


            ]);

        if (Pm::where('requestwork_id', $request->requestwork_id)->where('equipment_number', $request->equipment_number)->exists()) {
            Alert::error('اطلاعات pm تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        } else {
            // The record does not exist


            $Pm = Pm::create([
                'equipment_number' => $request->equipment_number,
                'requestwork_id' => $request->requestwork_id,
                'equipment_name_Alias' => $request->equipment_name_Alias,
                'installation_location' => $request->installation_location,

            ]);

            Alert::success('pm مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('pm.index');
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
        $pm = Pm::where('id', $id)->get()->first();
        // $requestWork= RequestWork::where('id', $pm->requestwork_id)->get()->first();
        // $equipment= Equipment::where('id', $pm->equipment_id)->get()->first();
        // $company= Company::where('id', $pm->company_id)->get()->first();
        // $equipmentall = Equipment::all();
        // $companyall = Company::all();
        // $requestworkall = RequestWork::all()->unique('equipment_number');
        // $requestworkwithoutunique = RequestWork::all();
        $requestwork = RequestWork::all()->unique('equipment_number');
        $requestworkwithoutunique = RequestWork::all();
        $equipment = Equipment::all();
        $company = Company::all();
        $Part = Part::all();
        $Brand = Brand::all();
        $pm_request_number = RequestWork::where('id', $pm->requestwork_id)->get()->first();
        return view('pm.edit', compact('pm', 'requestwork', 'equipment', 'company', 'Part', 'Brand', 'requestworkwithoutunique', 'pm_request_number'));
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
        $data_pm = Pm::with(['requestworks:id,request_number', 'equipments:id,name', 'companies:id,name'])->paginate();
        $code = 200;
        return response()->json(
            $data_pm,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

}
