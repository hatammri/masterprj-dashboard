<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeEquipment;
use RealRashid\SweetAlert\Facades\Alert;

class TypeEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('typeequipment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('typeequipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {// dd( $request);
        $request->validate([
            'name' => 'required',

        ], $messages = [
            'name.required' => 'نوع و تیپ نباید خالی باشد'
        ]);
        try {
            // Your query here
            TypeEquipment::create([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('typeequipment.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات نقش تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات نقش تکراری و یا اشتباه است', 'خطا');
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
        $typeequipment = TypeEquipment::where('id', $id)->get()->first();

        return view('typeequipment.edit', compact('typeequipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeEquipment $typeequipment)
    { //dd($request,$typeequipment);
        $request->validate([
            'name' => 'required',

        ], $messages = [
            'name.required' => 'نام نقش نباید خالی باشد'
        ]);
        try {
            $typeequipment->update([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('typeequipment.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات نقش تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات نقش تکراری و یا اشتباه است', 'خطا');
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
        $data_typeequipment = TypeEquipment::paginate();
        $code = 200;
        return response()->json(
            $data_typeequipment,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }


}
