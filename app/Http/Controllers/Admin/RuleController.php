<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Ostan;
use App\Models\Shahrestan;
use RealRashid\SweetAlert\Facades\Alert;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rule.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ostan = Ostan::all();
        $shahrestan = Shahrestan::all();

        return view('rule.create', compact('ostan', 'shahrestan'));
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
            Rule::create([
                'name' => $request->name,
            ]);
            Alert::success('نقش مورد نظر ایجاد شد', 'باتشکر');
            return redirect()->route('rule.index');
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
        $rule = Rule::where('id', $id)->get()->first();
        $ostan_select = Ostan::where('name', $rule->state)->get()->first();
        $shahrestan_select = shahrestan::where('name', $rule->city)->get()->first();
        $ostan = Ostan::all();
        $shahrestan = Shahrestan::all();
        return view('rule.edit', compact('rule', 'ostan_select', 'shahrestan_select', 'ostan', 'shahrestan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rule $rule)
    { //dd($request,$rule);
        $request->validate([
            'rule_name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required'
        ], $messages = [
            'rule_name.required' => 'نام شرکت نباید خالی باشد',
            'email.required' => 'ایمیل نباید خالی باشد',
            'phonenumber.required' => 'شماره همراه نباید خالی باشد',
            'address' => 'آدرس نباید خالی باشد',
            'state' =>  'استان نباید خالی باشد',
            'city' =>  'شهرستان نباید خالی باشد',

        ]);
        try {
            $ostan_name = Ostan::where('id', $request->state)->value('name');
            $Shahrestan_name = Shahrestan::where('id', $request->city)->value('name');
            $rule->update([
                'rule_name' => $request->rule_name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'address' => $request->address,
                'state' => $ostan_name,
                'city' => $Shahrestan_name,
            ]);
            Alert::success('شرکت مورد نظر ویرایش شد', 'باتشکر');
            return redirect()->route('rule.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //     // You need to handle the error here.     //     // Either send the user back to the screen or redirect them somewhere else
            Alert::error('اطلاعات شرکت تکراری و یا اشتباه است', 'خطا');
            return back();
            //     // Just some example
            //     //dd($e->getMessage(), $e->errorInfo);
        } catch (\Exception $e) {
            Alert::error('اطلاعات شرکت تکراری و یا اشتباه است', 'خطا');
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
        $data_rule = Rule::paginate();
        $code = 200;
        return response()->json(
            $data_rule,
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
