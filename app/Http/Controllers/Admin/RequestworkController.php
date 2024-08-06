<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Ostan;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\UnitMeasurement;
use App\Models\RequestWork;
use App\Models\TypeEquipment;
use App\Models\Brand;
use Hekmatinasser\Verta\Verta;

use RealRashid\SweetAlert\Facades\Alert;

class RequestworkController extends Controller
{
    public function index()
    {
        $requestworks = RequestWork::with(['customers.userID','equipments:id,name','barnds:id,name','typeEqupments:id,name'])->get();
        return view('requestwork.index',compact('requestworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Customer = Customer::all();
        $Equipment = Equipment::all();
        $brand = Brand::all();
        $typeEquipment = TypeEquipment::all();
        return view('requestwork.create', compact('Customer','Equipment','brand','typeEquipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'request_number'=> 'required',
            'customer' => 'required',
            'equipment' => 'required',
            'date_enter'=>'nullable|date',
            'date_delivery'=>'nullable|date',
            'date_out'=>'nullable|date',

        ], $messages = [
            'request_number.required'=> 'شماره درخواست‌کار نباید خالی باشد',
            'customer.required' => 'نام مشتری نباید خالی باشد',
            'equipment.required' => 'تجهیز نباید خالی باشد',
            'date_enter.required'=>'فرمت تاریخ ورود رعایت نشده',
            'date_delivery.required'=>'فرمت تاریخ پایان کار رعایت نشده',
            'date_out.required'=>'فرمت تاریخ تحویل رعایت نشده',

        ]);


        try {

            RequestWork::create([
                'request_number' =>  $request->request_number,
                'customer' => $request->customer,
                'equipment' => $request->equipment,
                'brand_id' => $request->brand_id,
                'type_equipment_id' => $request->type_equipment_id,
                'equipment_number'=> $request->equipment_number,
                'creator' => "1",
                'request_status' => "IS",
                'serviceplace' => $request->serviceplace,
                'description' => $request->description,
                'estimated_cost' => $request->estimated_cost,
                'date_enter' => $request->date_enter==null?null: Verta::parse($request->date_enter)->datetime()->format('Y-m-d'),
                'real_cost' => "0",
                'date_delivery' =>$request->date_delivery==null?null: Verta::parse($request->date_delivery)->datetime()->format('Y-m-d'),
                'Urgency_Work' => $request->Urgency_Work,
                'date_out' => $request->date_out==null?null: Verta::parse($request->date_out)->datetime()->format('Y-m-d'),
                'is_active' => "1",
            ]);
            Alert::success('درخواست‌کار مورد نظر ایجاد شد', 'باتشکر');
          return redirect()->route('requestwork.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات درخواست‌کار تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
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
        $requestwork = RequestWork::where('id', $id)->get()->first();
        $customer= Customer::where('id', $requestwork->customer)->get()->first();
        $equipment= Equipment::where('id', $requestwork->equipment)->get()->first();
        $customerall = customer::all();
        $equipmentall = Equipment::all();
        $brand = Brand::all();
        $typeEquipment = TypeEquipment::all();
        return view('requestwork.edit', compact('requestwork', 'customer','customerall', 'equipment','equipmentall','brand','typeEquipment'));
    }
    public function editstatus(string $id)
    {
        $requestwork = RequestWork::where('id', $id)->get()->first();
        $customer= Customer::where('id', $requestwork->customer)->get()->first();
        $equipment= Equipment::where('id', $requestwork->equipment)->get()->first();
        $customerall = customer::all();
        $equipmentall = Equipment::all();

        return view('requestwork.editstatus', compact('requestwork', 'customer','customerall', 'equipment','equipmentall'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, requestwork $requestwork)
    {


            $requestwork->update([
                'request_number'=> $request->request_number,
                'customer' => $request->customer,
                'equipment' => $request->equipment,
                'brand_id' => $request->brand_id,
                'type_equipment_id' => $request->type_equipment_id,
                'equipment_number' => $request->equipment_number,
                'serviceplace' => $request->serviceplace,
                'description' => $request->description,
                'estimated_cost' => $request->estimated_cost,
                'real_cost' => $request->real_cost,
                'date_enter' => $request->date_enter==null?null: Verta::parse($request->date_enter)->datetime()->format('Y-m-d'),
                'date_delivery' =>$request->date_delivery==null?null: Verta::parse($request->date_delivery)->datetime()->format('Y-m-d'),
                'date_out' => $request->date_out==null?null: Verta::parse($request->date_out)->datetime()->format('Y-m-d'),
                'Urgency_Work' => $request->Urgency_Work,
                "request_status" => $request->request_status

            ]);
            Alert::success('درخواست‌کار مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('requestwork.index');

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
        $data_Specialties = RequestWork::with(['customers.userID','equipments:id,name'])->paginate();

        $code = 200;
        return response()->json(
            $data_Specialties,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }


    public function getRequestworkEquipmentNumber($request_id)
    {
        $equipment_number = RequestWork::with(['customers.companies','equipments:id,name'])->where('id', $request_id)->get();
        return $equipment_number;

    }
    public function getEquipmentNumberRequestwork($equipment_number)
    { $requestwork= RequestWork::with(['customers.companies','equipments:id,name'])->where('equipment_number', $equipment_number)->get();
        return  $requestwork;
    }


    public function getAllRequestwork()
    {

        $requestwork = RequestWork::all();
        $requestworkwithunique = RequestWork::all()->unique('equipment_number');
        return ['requestwork' => $requestwork , 'requestworkwithunique' => $requestworkwithunique];

    }


}
