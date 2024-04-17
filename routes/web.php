<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\Admin\EquipmentController;
use App\Http\Controllers\Admin\TypeEquipmentController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\UnitMeasurementController;
use App\Http\Controllers\Admin\MachineController;
use App\Http\Controllers\Admin\OperatorController;
use App\Http\Controllers\Admin\RequestworkController;
use App\Models\Rule;

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
        Route::put('/update/{brand}', [BrandController::class, 'update'])->name('update');
    });
    Route::prefix('rule')->name('rule.')->group(function () {
        Route::get('/create', [RuleController::class, 'create'])->name('create');
        Route::post('/store', [RuleController::class, 'store'])->name('store');
        Route::get('/index', [RuleController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [RuleController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [RuleController::class, 'show'])->name('show');
        Route::put('/update/{rule}', [RuleController::class, 'update'])->name('update');
    });
    Route::prefix('equipment')->name('equipment.')->group(function () {
        Route::get('/create', [EquipmentController::class, 'create'])->name('create');
        Route::post('/store', [EquipmentController::class, 'store'])->name('store');
        Route::get('/index', [EquipmentController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [EquipmentController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [EquipmentController::class, 'show'])->name('show');
        Route::put('/update/{equipment}', [EquipmentController::class, 'update'])->name('update');
    });
    Route::prefix('typeequipment')->name('typeequipment.')->group(function () {
        Route::get('/create', [TypeEquipmentController::class, 'create'])->name('create');
        Route::post('/store', [TypeEquipmentController::class, 'store'])->name('store');
        Route::get('/index', [TypeEquipmentController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [TypeEquipmentController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [TypeEquipmentController::class, 'show'])->name('show');
        Route::put('/update/{typeequipment}', [TypeEquipmentController::class, 'update'])->name('update');
    });
    Route::prefix('specialty')->name('specialty.')->group(function () {
        Route::get('/create', [SpecialtyController::class, 'create'])->name('create');
        Route::post('/store', [SpecialtyController::class, 'store'])->name('store');
        Route::get('/index', [SpecialtyController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [SpecialtyController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [SpecialtyController::class, 'show'])->name('show');
        Route::put('/update/{specialty}', [SpecialtyController::class, 'update'])->name('update');
    });
    Route::prefix('requestwork')->name('requestwork.')->group(function () {
        Route::get('/create', [RequestworkController::class, 'create'])->name('create');
        Route::post('/store', [RequestworkController::class, 'store'])->name('store');
        Route::get('/index', [RequestworkController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [RequestworkController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [RequestworkController::class, 'show'])->name('show');
        Route::put('/update/{requestwork}', [RequestworkController::class, 'update'])->name('update');
    });
    Route::prefix('operator')->name('operator.')->group(function () {
        Route::get('/create', [OperatorController::class, 'create'])->name('create');
        Route::post('/store', [OperatorController::class, 'store'])->name('store');
        Route::get('/index', [OperatorController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [OperatorController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [OperatorController::class, 'show'])->name('show');
        Route::put('/update/{operator}', [OperatorController::class, 'update'])->name('update');
    });
    // Route::prefix('operatorSpecialty')->name('operatorSpecialty.')->group(function () {
    //     Route::get('/create', [OperatorController::class, 'create'])->name('create');
    //     Route::post('/store', [OperatorController::class, 'store'])->name('store');
    //     Route::get('/index', [OperatorController::class, 'index'])->name('index');
    //     Route::get('/edit/{id}', [OperatorController::class, 'edit'])->name('edit');
    //     Route::get('/show/{data}', [OperatorController::class, 'show'])->name('show');
    //     Route::put('/update/{operator}', [OperatorController::class, 'update'])->name('update');
    // });
    Route::prefix('machine')->name('machine.')->group(function () {
        Route::get('/create', [MachineController::class, 'create'])->name('create');
        Route::post('/store', [MachineController::class, 'store'])->name('store');
        Route::get('/index', [MachineController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [MachineController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [MachineController::class, 'show'])->name('show');
        Route::put('/update/{machine}', [MachineController::class, 'update'])->name('update');
    });

    Route::prefix('unitMeasurement')->name('unitMeasurement.')->group(function () {
        Route::get('/create', [UnitMeasurementController::class, 'create'])->name('create');
        Route::post('/store', [UnitMeasurementController::class, 'store'])->name('store');
        Route::get('/index', [UnitMeasurementController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [UnitMeasurementController::class, 'edit'])->name('edit');
        Route::get('/show/{data}', [UnitMeasurementController::class, 'show'])->name('show');
        Route::put('/update/{unitMeasurement}', [UnitMeasurementController::class, 'update'])->name('update');
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
Route::get('rule/datatable', [RuleController::class, 'datatable'])->name('rule.datatable');
Route::get('brand/datatable', [BrandController::class, 'datatable'])->name('brand.datatable');
Route::get('typeEquipment/datatable', [TypeEquipmentController::class, 'datatable'])->name('typeEquipment.datatable');
Route::get('equipment/datatable', [EquipmentController::class, 'datatable'])->name('Equipment.datatable');
Route::get('specialty/datatable', [SpecialtyController::class, 'datatable'])->name('Specialty.datatable');
Route::get('machine/datatable', [MachineController::class, 'datatable'])->name('machine.datatable');
Route::get('unitMeasurement/datatable', [UnitMeasurementController::class, 'datatable'])->name('unitMeasurement.datatable');
Route::get('operator/datatable', [OperatorController::class, 'datatable'])->name('operator.datatable');
Route::get('requestwork/datatable', [RequestworkController::class, 'datatable'])->name('requestwork.datatable');

Route::any('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/resend_otp', [AuthController::class, 'resendOtp'])->middleware('guest')->name('resendOtp');
Route::post('/check_otp', [AuthController::class, 'checkOtp'])->middleware('guest')->name('checkOtp');
Route::any('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');
