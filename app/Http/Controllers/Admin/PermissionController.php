<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission as ModelsPermission;

class PermissionController extends Controller
{

    public function index()
    {
        //    $data_permission = Permission::paginate(20);
        //  $data_permission_all = Permission::all();

        //      dd($data_permission,$data_permission_all);
        $permissions = Permission::all();

        return view('permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('permission.create');
    }

    public function edit($id)
    {
        $permission = Permission::where('id', $id)->get()->first();

        return view('permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    { //dd($request,$permission);
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',

        ], $messages = [
            'name.required' => 'نمایشی نام permission نباید خالی باشد',
            'display_name.required' => 'نام سیستمی  permission نباید خالی باشد',

        ]);
        try {
            $permission->update([
                'name' => $request->name,
                'display_name' => $request->display_name,
                'guard_name' => "web",
                        ]);
            Alert::success('permission مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('permission.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات permission تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات permission تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        }
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',

        ], $messages = [
            'name.required' => 'نمایشی نام permission نباید خالی باشد',
            'display_name.required' => 'نام سیستمی  permission نباید خالی باشد',

        ]);
        try {
            Permission::create([
                'name' => $request->name,
                'display_name' => $request->display_name,
                'guard_name' => "web",

            ]);
            Alert::success('permission مورد نظر ایجاد شد', 'باتشکر');
           return redirect()->route('permission.index');
        } catch (\Illuminate\Database\QueryException $e) {
            // You need to handle the error here.
            // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات permission تکراری و یا اشتباه است', 'خطا');
            return back();

            // Just some example
            //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات permission تکراری و یا اشتباه است', 'خطا');
            return redirect()->back();
        }
    }
    public function datatable()
    {
        $data_permission = Permission::paginate();
        $code = 200;
        return response()->json(
            $data_permission,
            $code,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
}

