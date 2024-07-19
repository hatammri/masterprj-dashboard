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
        return view('pm.index');
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


        return view('pm.create', compact('requestwork','equipment','company','Part','Brand','requestworkwithoutunique'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {//dd($request);
   try{
        $request->validate([
            'equipment_number' => 'required',
            'requestwork_id' => 'required',
            'equipment_id' => 'required',
            'company_id' => 'required',
            'equipment_name_Alias' => 'required',
            'installation_location' => 'required',
            'FormData' => 'required',
            'FormData.*.*' => 'required',
            'FormData.part_id.*' => 'required',
            'FormData.brand_id.*' => 'required',
            'FormData.num_parts_used.*' => 'required',
            'FormData.date_Replacement.*' => 'required',
            'FormData.date_Replacement_next.*' => 'required',
            'FormData.Allowed_working_hours.*' => 'required',

        ], $messages = [
            'equipment_number.required' => 'شماره سریال تجهیز  نباید خالی باشد',
            'requestwork_id.required' => '  شماره درخواست‌‌‌‌‌‌‌‌‌کار  نباید خالی باشد',
            'equipment_id.required' => ' نام تجهیز نباید خالی باشد',
            'company_id.required' => '  نام شرکت  نباید خالی باشد',
            'equipment_name_Alias.required' => ' نام مستعار تجهیز  نباید خالی باشد',
            'installation_location.required' => ' محل نصب  نباید خالی باشد',


        ]);

            DB::beginTransaction();

            $Pm = Pm::create([
                'equipment_number' => $request->equipment_number,
                'requestwork_id' => $request->requestwork_id,
                'equipment_id' => $request->equipment_id,
                'company_id' => $request->company_id,
                'equipment_name_Alias' => $request->equipment_name_Alias,
                'installation_location' => $request->installation_location,

            ]);

            $PartDefController= new PartDefController();
            $PartDefController->store($request->FormData,$Pm->id);


            DB::commit();
            Alert::success('pm مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('pm.index');

        }
        catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            DB::rollBack();
            Alert::error('اطلاعات درخواست‌کار تکراری و یا اشتباه است', 'خطا');
            return back();

        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('اطلاعات درخواست‌کار تکراری و یا اشتباه است', 'خطا');
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
        
        return view('pm.edit', compact('pm','requestwork','equipment','company','Part','Brand','requestworkwithoutunique'));
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
