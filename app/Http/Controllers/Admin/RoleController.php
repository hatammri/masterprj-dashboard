<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Ostan;
use App\Models\Shahrestan;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions =Permission::all();


        return view('role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',


        ], $messages = [
            'name.required' => 'نام نقش نباید خالی باشد',
            'display_name.required' => 'نام نمایشی نقش نباید خالی باشد'

        ]);
        try {
            // Your query here
            DB::beginTransaction();

           $role= Role::create([
                'name' => $request->name,
                'display_name' => $request->display_name,
                'guard_name'=>'web'
            ]);
            $permissions = $request->except('_token','display_name','name');
            $role->givePermissionTo($permissions);
            DB::commit();

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
        Alert::success('نقش مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('role.index');
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
        $role = Role::where('id', $id)->get()->first();
        $permissions=Permission::all();
        return view('role.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    { //dd($request,$role);
        $request->validate([
            'name' => 'required',

        ], $messages = [
            'name.required' => 'نام نقش نباید خالی باشد'
        ]);
        try {
            $role->update([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('role.index');
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
        $data_role = Role::paginate();
        $code = 200;
        return response()->json(
            $data_role,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }


}
