<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Equipment;
use App\Models\Role;
use App\Models\TypeEquipment;
use RealRashid\SweetAlert\Facades\Alert;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('equipment.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $brand = Brand::all();
        $typeEquipment = TypeEquipment::all();
        return view('equipment.create', compact('brand', 'typeEquipment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'equipment_security' => 'required',
            'weight' => 'required',
            'dimensions' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'type_equipment_id' => 'required'
        ], $messages = [
            'name.required' => 'نام تجهیز نباید خالی باشد',
            'price.required' => 'قیمت تجهیز نباید خالی باشد',
            'color.required' => 'رنگ تجهیز نباید خالی باشد',
            'equipment_security.required' => 'امنیت تجهیز را مشخص کنید',
            'weight.required' =>  'وزن نباید خالی باشد',
            'dimensions.required' =>  'ابعاد نباید خالی باشد',
            'description.required' =>  'توضیحات نباید خالی باشد',
            'brand_id.required' =>  'برند تجهیز مشخص نشده',
            'type_equipment_id.required' =>  'نوع تجهیز مشخص نشده',

        ]);
        try {
            Equipment::create([
                'name' => $request->name,
                'price' => $request->price,
                'color' => $request->color,
                'equipment_security' => $request->equipment_security,
                'weight' => $request->weight,
                'dimensions' => $request->dimensions,
                'description' => $request->description,
                'brand_id' => $request->brand_id,
                'type_equipment_id' => $request->type_equipment_id
            ]);
            Alert::success('تجهیز ایجاد گردید', 'باتشکر');
            return redirect()->route('equipment.index');
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('اطلاعات تجهیز تکراری و یا اشتباه است', 'خطا');
            return back();
            dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات تجهیز تکراری و یا اشتباه است', 'خطا');
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
        $equipment = Equipment::where('id', $id)->get()->first();
        $brand = Brand::all();
        $typeEquipment = TypeEquipment::all();

        return view('equipment.edit', compact('equipment', 'brand', 'typeEquipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {  //dd($request,$equipment);
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'equipment_security' => 'required',
            'weight' => 'required',
            'dimensions' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'type_equipment_id' => 'required'
        ], $messages = [
            'name.required' => 'نام تجهیز نباید خالی باشد',
            'price.required' => 'قیمت تجهیز نباید خالی باشد',
            'color.required' => 'رنگ تجهیز نباید خالی باشد',
            'equipment_security.required' => 'امنیت تجهیز را مشخص کنید',
            'weight.required' =>  'وزن نباید خالی باشد',
            'dimensions.required' =>  'ابعاد نباید خالی باشد',
            'description.required' =>  'توضیحات نباید خالی باشد',
            'brand_id.required' =>  'برند تجهیز مشخص نشده',
            'type_equipment_id.required' =>  'نوع تجهیز مشخص نشده'
        ]);
        try {
            $equipment->update([
                'name' => $request->name,
                'price' => $request->price,
                'color' => $request->color,
                'equipment_security' => $request->equipment_security,
                'weight' => $request->weight,
                'dimensions' => $request->dimensions,
                'description' => $request->description,
                'brand_id' => $request->brand_id,
                'type_equipment_id' => $request->type_equipment_id
            ]);
            Alert::success('تجهیز مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('equipment.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات مشتری تکراری و یا اشتباه است', 'خطا');
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
        $equipments = Equipment::with(['brands:id,name','typeEquipments:id,name'])->paginate();

        return response()->json(
            $equipments,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );

    }
}
