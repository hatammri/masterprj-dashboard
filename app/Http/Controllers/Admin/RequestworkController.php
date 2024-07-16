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

use RealRashid\SweetAlert\Facades\Alert;

class RequestworkController extends Controller
{
    public function index()
    {
        $requestworks = RequestWork::with(['customers.userID','equipments:id,name'])->get();
        return view('requestwork.index',compact('requestworks'));
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
    {// dd($request);
        $request->validate([
            'request_number'=> 'required',
            'customer' => 'required',
            'equipment' => 'required',

        ], $messages = [
            'request_number.required'=> 'شماره درخواست‌کار نباید خالی باشد',
            'customer.required' => 'نام مشتری نباید خالی باشد',
            'equipment.required' => 'تجهیز نباید خالی باشد',


        ]);

        try {
            RequestWork::create([
                'request_number' =>  $request->request_number,
                'customer' => $request->customer,
                'equipment' => $request->equipment,
                'equipment_number'=> $request->equipment_number,
                'creator' => "1",
                'request_status' => "IS",
                'serviceplace' => $request->serviceplace,
                'description' => $request->description,
                'estimated_cost' => $request->estimated_cost,
                'date_enter' => $request->date_enter,
                'real_cost' => "null",
                'date_delivery' => $request->date_delivery,
                'Urgency_Work' => $request->Urgency_Work,
                'date_out' => "null",
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

        return view('requestwork.edit', compact('requestwork', 'customer','customerall', 'equipment','equipmentall'));
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

        $request->validate([
            'request_number'=> 'required',
            'customer' => 'required',
            'equipment' => 'required',

        ], $messages = [
            'request_number.required'=> 'شماره درخواست‌کار نباید خالی باشد',

            'customer.required' => 'نام مشتری نباید خالی باشد',
            'equipment.required' => 'تجهیز نباید خالی باشد',


        ]);
        try {
            $requestwork->update([
                'request_number'=> $request->request_number,
                'customer' => $request->customer,
                'equipment' => $request->equipment,
                'equipment_number' => $request->equipment_number,
                'serviceplace' => $request->serviceplace,
                'description' => $request->description,
                'estimated_cost' => $request->estimated_cost,
                'real_cost' => $request->real_cost,
                'date_enter' => $request->date_enter,
                'date_delivery' => $request->date_delivery,
                'date_out' => $request->date_out,
                'Urgency_Work' => $request->Urgency_Work,
                "request_status" => $request->request_status

            ]);
            Alert::success('درخواست‌کار مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('requestwork.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات درخواست‌کار تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات درخواست‌کار تکراری و یا اشتباه است', 'خطا');
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
        $equipment_number = RequestWork::where('id', $request_id)->get();
        return $equipment_number;

    }
    public function getEquipmentNumberRequestwork($equipment_number)
    {
        $requestwork = RequestWork::where('equipment_number', $equipment_number)->get();
        return  $requestwork;
    }


    public function getAllRequestwork()
    {

        $requestwork = RequestWork::all();
        $requestworkwithunique = RequestWork::all()->unique('equipment_number');
        return ['requestwork' => $requestwork , 'requestworkwithunique' => $requestworkwithunique];

    }
}
