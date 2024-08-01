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

class PartDefController extends Controller
{
    public function index()
    {
        return view('pm.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pm = Pm::where('id', $id)->with('requestworks')->get()->first();
        $requestwork = RequestWork::all()->unique('equipment_number');
        $requestworkwithoutunique = RequestWork::all();
        $equipment = Equipment::all();
        $company = Company::all();
        $Part = Part::all();
        $Brand = Brand::all();
        $PmPart=PmPart::where('pm_id',$pm->id)->with('brands','parts','pms')->get();
        return view('partdef.create', compact('pm','requestwork', 'equipment', 'company', 'Part', 'Brand', 'requestworkwithoutunique','PmPart'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pm $pm)
    {
        $request->validate([
            'part_id' => 'required',
            'brand_id' => 'required',

        ], $messages = [
                'part_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
                'brand_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد'

            ]);

        // if (PmPart::where('pm_id', $pm->id)->where('part_id', $request->part_id )->where('brand_id', $request->brand_id)->exists()) {
        //     Alert::error('اطلاعات قطعه برای این pm تکراری و یا اشتباه است', 'خطا');
        //     return redirect()->back();
        // } else {
            // The record does not exist


            $PmPart = PmPart::create([
                'pm_id' => $pm->id,
                'part_id' => $request->part_id ,
                'brand_id' => $request->brand_id ,
                'num_parts_used' => $request->num_parts_used,
                'date_Replacement' => $request->date_Replacement,
                'date_Replacement_next' => $request->date_Replacement_next,
                'Allowed_working_hours' => $request->Allowed_working_hours,


            ]);

            Alert::success('pm مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->back();
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
    public function update(Request $request, Pm $pm)
    { dd($request,$pm);
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


    public function getShahrestanList(Request $request)
    {
        $shahrestan = Shahrestan::where('ostan', $request->ostan)->get();
        return $shahrestan;
    }
}
