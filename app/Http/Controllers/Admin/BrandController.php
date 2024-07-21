<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Ostan;
use App\Models\Shahrestan;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ostan = Ostan::all();
        $shahrestan = Shahrestan::all();

        return view('brand.create', compact('ostan', 'shahrestan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {// dd( $request);
        $request->validate([
            'name' => 'required',

        ], $messages = [
            'name.required' => 'نام نقش نباید خالی باشد'
        ]);
        try {
            // Your query here
            Brand::create([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('brand.index');
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
        $brand = Brand::where('id', $id)->get()->first();

        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    { //dd($request,$brand);
        $request->validate([
            'name' => 'required',

        ], $messages = [
            'name.required' => 'نام نقش نباید خالی باشد'
        ]);
        try {
            $brand->update([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('brand.index');
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
        $data_brand = Brand::paginate();
        $code = 200;
        return response()->json(
            $data_brand,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }


}
