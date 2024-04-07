<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Operator;
use App\Models\Operator_specialty;

use App\Models\Ostan;
use App\Models\UnitMeasurement;
use App\Models\Specialty;
use Illuminate\Support\Facades\DB;
use App\Models\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class operatorController extends Controller
{
    public function index(){
    $Operators = Operator::with('Specialties','Sematdata')->paginate();
        return view('operator.index',compact('Operators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Specialty = Specialty::all();
        $Rule=Rule::all();
        return view('operator.create', compact('Specialty','Rule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'semat' => 'required',
            'salery' => 'required',
            'specialty' => 'required',
        ], $messages = [
            'name.required' => 'نام ماشین نباید خالی باشد',
            'code.required' => 'کد ماشین نباید خالی باشد',
            'available.required' => 'وضعیت استفاده از ماشین  نباید خالی باشد',
            'specialty.required' => ' تخصص نباید خالی باشد',

        ]);

        try {

            DB::beginTransaction();
            $operator = Operator::create([
                'name' => $request->name,
                'codemeli' => $request->codemeli,
                'semat' => $request->semat,
                'salery' => $request->salery,
                'available'=> $request->available,
                'image'=> "Defult.png",
                'phonenumber'=>"null",
                'email'=> "null",
                'username'=> "null",
                'password'=> "null",
                'is_active' => "1",

            ]);

            foreach ($request->specialty as $specialtyitem) {
                Operator_specialty::create([
                    'operator_id' => $operator->id,
                    'specialty_id' => $specialtyitem
                ]);
            }

            DB::commit();

            Alert::success('اطلاعات اپراتور مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('operator.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات اپراتور تکراری و یا اشتباه است', 'خطا');
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
        $operator = operator::where('id', $id)->get()->first();
       // dd($operator->unitmeasurement);

        $Specialty_select = Specialty::where('id', $operator->specialty)->get()->first();
        // $shahrestan_select = shahrestan::where('name', $operator->city)->get()->first();
        $Specialty = Specialty::all();
        $Rule=Rule::all();
        return view('operator.edit', compact('operator', 'Specialty_select', 'Specialty',"Rule"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, operator $operator)
    { //dd($request,$operator);
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'available' => 'required',
            'specialty' => 'required',
        ], $messages = [
            'name.required' => 'نام ماشین نباید خالی باشد',
            'code.required' => 'کد ماشین نباید خالی باشد',
            'available.required' => 'وضعیت استفاده از ماشین  نباید خالی باشد',
            'specialty.required' => ' تخصص نباید خالی باشد',

        ]);
        try {
            $operator->update([
                'name' => $request->name,
                'code' => $request->code,
                'available' => $request->available,
                'specialty' => $request->specialty,
                'is_active' => "1",

            ]);
            Alert::success('ماشین مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('operator.index');
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
        $data_operators = Operator::with('Specialties','Sematdata')->paginate();
        $code = 200;
        return response()->json(
            $data_operators,
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
