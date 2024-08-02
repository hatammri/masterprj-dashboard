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
use Hekmatinasser\Verta\Verta;


use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class PartDefController extends Controller
{
    public function index(string $id)
    {
        $PmPart = PmPart::where('pm_id', $id)->get();
        return view('partdef.index',compact('PmPart','id'));
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
            'date_Replacement'=>'nullable|date',
            'date_Replacement_next'=>'nullable|date',

        ], $messages = [
                'part_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
                'brand_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
                'date_Replacement.required'=>'فرمت تاریخ ورود رعایت نشده',
                'date_Replacement_next.required'=>'فرمت تاریخ پایان کار رعایت نشده',
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
                'date_Replacement' => $request->date_Replacement==null?null: Verta::parse($request->date_Replacement)->datetime()->format('Y-m-d'),
                'date_Replacement_next' => $request->date_Replacement_next==null?null: Verta::parse($request->date_Replacement_next)->datetime()->format('Y-m-d'),
                'Allowed_working_hours' => $request->Allowed_working_hours,


            ]);

            Alert::success('قطعه مورد نظر ایجاد شد', 'باتشکر');
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
        $PmPart = PmPart::where('id', $id)->with('pms')->get()->first();
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
        return view('partdef.edit', compact( 'PmPart','requestwork', 'equipment', 'company', 'Part', 'Brand', 'requestworkwithoutunique'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PmPart $pmpart)
    {
        $request->validate([
            'part_id' => 'required',
            'brand_id' => 'required',
            'date_Replacement'=>'nullable|date',
            'date_Replacement_next'=>'nullable|date',

        ], $messages = [
            'part_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
            'brand_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
            'date_Replacement.required'=>'فرمت تاریخ ورود رعایت نشده',
            'date_Replacement_next.required'=>'فرمت تاریخ پایان کار رعایت نشده'
            ]);

            $pmpart->update([
                'part_id' => $request->part_id ,
                'brand_id' => $request->brand_id ,
                'num_parts_used' => $request->num_parts_used,
                'date_Replacement' => $request->date_Replacement==null?null: Verta::parse($request->date_Replacement)->datetime()->format('Y-m-d'),
                'date_Replacement_next' => $request->date_Replacement_next==null?null: Verta::parse($request->date_Replacement_next)->datetime()->format('Y-m-d'),
                'Allowed_working_hours' => $request->Allowed_working_hours,

            ]);
            Alert::success('قطعه مورد نظر ویرایش شد', 'باتشکر');
            $PmPart=$pmpart;
            $id=$pmpart->pm_id;
            return redirect()->route('partdef.index', ['id' => $id])->with('PmPart', 'id');

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
        $data_pm = PmPart::with(['parts', 'brands', 'pms.requestworks'])->paginate();
        $code = 200;
        return response()->json(
            $data_pm,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

}

