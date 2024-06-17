<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Ostan;
use App\Models\UnitMeasurement;
use App\Models\Specialty;
use App\Models\Part;
use App\Models\Brand;

use RealRashid\SweetAlert\Facades\Alert;

class PartDefController extends Controller
{
    public function index()
    {
        return view('partdef.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Part = Part::all();
        $Brand = Brand::all();

        return view('partdef.create', compact('Part','Brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            Machine::create([
                'name' => $request->name,
                'code' => $request->code,
                'available' => $request->available,
                'specialty' => $request->specialty,
                'is_active' => "1",

            ]);
            Alert::success('ماشین مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('machine.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات ماشین تکراری و یا اشتباه است', 'خطا');
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
        $machine = machine::where('id', $id)->get()->first();
       // dd($machine->unitmeasurement);

        $Specialty_select = Specialty::where('id', $machine->specialty)->get()->first();
        // $shahrestan_select = shahrestan::where('name', $machine->city)->get()->first();
        $Specialty = Specialty::all();
        return view('machine.edit', compact('machine', 'Specialty_select', 'Specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, machine $machine)
    { //dd($request,$machine);
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
            $machine->update([
                'name' => $request->name,
                'code' => $request->code,
                'available' => $request->available,
                'specialty' => $request->specialty,
                'is_active' => "1",

            ]);
            Alert::success('ماشین مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('machine.index');
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
        $data_machines = machine::with(['Specialties:id,name'])->paginate();
        $code = 200;
        return response()->json(
            $data_machines,
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
