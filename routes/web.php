<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\RuleController;


//require __DIR__ . '/auth.php';
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::prefix('company')->name('company.')->group(function () {
        Route::get('/create', [CompanyController::class, 'create'])->name('create');
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
        Route::get('/index', [CompanyController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [CompanyController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [CompanyController::class, 'show'])->name('show');
        Route::put('/update/{company}', [CompanyController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CompanyController::class, 'delete'])->name('delete');
    });
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/create', [CustomerController::class, 'create'])->name('create');
        Route::post('/store', [CustomerController::class, 'store'])->name('store');
        Route::get('/index', [CustomerController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [CustomerController::class, 'show'])->name('show');
        Route::put('/update/{customer}', [CustomerController::class, 'update'])->name('update');
    });
    Route::prefix('brand')->name('brand.')->group(function () {
        Route::get('/create', [BrandController::class, 'create'])->name('create');
        Route::post('/store', [BrandController::class, 'store'])->name('store');
        Route::get('/index', [BrandController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [BrandController::class, 'show'])->name('show');
        Route::put('/update/{customer}', [BrandController::class, 'update'])->name('update');
    });
    Route::prefix('rule')->name('rule.')->group(function () {
        Route::get('/create', [RuleController::class, 'create'])->name('create');
        Route::post('/store', [RuleController::class, 'store'])->name('store');
        Route::get('/index', [RuleController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [RuleController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [RuleController::class, 'show'])->name('show');
        Route::put('/update/{customer}', [RuleController::class, 'update'])->name('update');
    });

    Route::get('', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::get('/personnels/list_centers', function () {
        return view('personnel.index');
    })->name('personnels.list_centers');

    Route::get('/personnels/list_personnels', function () {
        return view('personnel.list');
    })->name('personnels.list_personnels');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');
    Route::get('/reports/list_scan_period', function () {
        return view('reports.listScans.listscanperiod');
    })->name('reports.list_scan_period');

    Route::get('/reports/list_contradiction', function () {
        return view('reports.listScans.listcontradiction');
    })->name('reports.list_contradiction');

    Route::get('/reports/list_personnel', function () {
        return view('reports.listScans.listpersonnel');
    })->name('reports.list_personnel');

    Route::get('/reports/list_scans', function () {
        return view('reports.listScans.listscans');
    })->name('reports.list_scans');

    Route::get('/reports/listContradictions', function () {
        return view('reports.listContradictions.listcontradictions');
    })->name('reports.listContradictions.listcontradictions');

    Route::get('/reports/show_contradiction_details', function () {
        return view('reports.listScans.showalldetails');
    })->name('reports.show_all_details');

    Route::get('/reports/show_all_details', function () {
        return view('reports.listScans.contradictiondetails');
    })->name('reports.contradictiondetails');

    Route::get('/reports/itemdetail', function () {
        return view('reports.itemdetail');
    })->name('reports.itemdetail');


    Route::get('/reports/testtable', function () {
        return view('reports.testtable');
    })->name('reports.testtable');


    Route::get('/accesslevel/listStation', function () {
        return view('accesslevel.index');
    })->name('accesslevel.index');
    Route::get('/accesslevel/accessroles', function () {
        return view('accesslevel.accessroles');
    })->name('accesslevel.accessroles');
    Route::get('/accesslevel/accesspermission', function () {
        return view('accesslevel.accesspermission');
    })->name('accesslevel.accesspermission');

    Route::get('/accesslevel/appuserview', function () {
        return view('accesslevel.appuserview');
    })->name('accesslevel.appuserview');
});
Route::get('company/datatable', [CompanyController::class, 'datatable'])->name('company.datatable');
Route::get('customer/datatable', [CustomerController::class, 'datatable'])->name('customer.datatable');

Route::get('/getListShahrestan', [CompanyController::class, 'getShahrestanList'])->name('getListShahrestan');

Route::any('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/resend_otp', [AuthController::class, 'resendOtp'])->middleware('guest')->name('resendOtp');
Route::post('/check_otp', [AuthController::class, 'checkOtp'])->middleware('guest')->name('checkOtp');
Route::any('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');
