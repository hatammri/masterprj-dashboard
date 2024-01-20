<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'description' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required'
        ]);

        Company::create([
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'description' => $request->description,
            'address' => $request->address,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        alert()->success('شرکت مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd("$id");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
        $data_companies = Company::paginate();
        $code = 200;
        return response()->json(
            $data_companies,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
}
