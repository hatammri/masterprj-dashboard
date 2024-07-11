<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Ostan;
use App\Models\Pm;
use App\Models\RequestWork;
use App\Models\Shahrestan;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requestwork = RequestWork::all();
        $customer = Customer::all();
        $pm=Pm::all();
        $company=Company::all();
        $pm_count=$pm->count();
        $requestwork_count= $requestwork->count();
        $customer_count=$customer->count();
        $company_count=$company->count();

        return view('dashboard.index', compact('requestwork_count', 'customer_count','pm_count','company_count'));
    }




}
