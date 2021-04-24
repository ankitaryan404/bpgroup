<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RetailController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ResidentialController;
use App\Http\Controllers\Admin\OfficespaceController;
use App\Http\Controllers\Admin\PlotController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Staff\StaffsController;
use App\Http\Controllers\Staff\StaffPropertyController;
use App\Http\Controllers\FrontController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('property-list/{str}', [FrontController::class, 'list']);
Route::view('post-property', [FrontController::class, 'post_property']);



Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/login', [AdminController::class, 'admin_auth'])->name('admin.auth');

Route::get('marketing-staff', [StaffsController::class, 'index']);
Route::post('marketing-staff/login', [StaffsController::class, 'staff_auth'])->name('staff.auth');

Route::group(['middleware' => 'admin_auth'], function () {

    Route::view('admin/dashboard', 'admin/dashboard');
    Route::get('admin/retail', [RetailController::class, 'index']);
    Route::get('admin/retail/manage', [RetailController::class, 'manage']);
    Route::get('admin/retail/manage/{id}', [RetailController::class, 'manage']);
    Route::post('admin/retail/manage-retail', [RetailController::class, 'manage_retail']);
    Route::get('admin/retail/status/{status}/{id}', [RetailController::class, 'status']);
    Route::get('admin/retail/delete/{id}', [RetailController::class, 'delete']);
    Route::get('admin/retail/search/{str}', [RetailController::class, 'search']);
    Route::get('admin/retail/detail/{id}', [RetailController::class, 'detail']);
    
    Route::get('admin/warehouse', [WarehouseController::class, 'index']);
    Route::get('admin/warehouse/manage', [WarehouseController::class, 'manage']);
    Route::get('admin/warehouse/manage/{id}', [WarehouseController::class, 'manage']);
    Route::post('admin/warehouse/manage-warehouse', [WarehouseController::class, 'manage_warehouse']);
    Route::get('admin/warehouse/status/{status}/{id}', [WarehouseController::class, 'status']);
    Route::get('admin/warehouse/delete/{id}', [WarehouseController::class, 'delete']);
    Route::get('admin/warehouse/search/{str}', [WarehouseController::class, 'search']);
    Route::get('admin/warehouse/detail/{id}', [WarehouseController::class, 'detail']);

    Route::get('admin/residential', [ResidentialController::class, 'index']);
    Route::get('admin/residential/manage', [ResidentialController::class, 'manage']);
    Route::get('admin/residential/manage/{id}', [ResidentialController::class, 'manage']);
    Route::post('admin/residential/manage-residential', [ResidentialController::class, 'manage_residential']);
    Route::get('admin/residential/status/{status}/{id}', [ResidentialController::class, 'status']);
    Route::get('admin/residential/delete/{id}', [ResidentialController::class, 'delete']);
    Route::get('admin/residential/search/{str}', [ResidentialController::class, 'search']);
    Route::get('admin/residential/detail/{id}', [ResidentialController::class, 'detail']);

    Route::get('admin/officespace', [OfficespaceController::class, 'index']);
    Route::get('admin/officespace/manage', [OfficespaceController::class, 'manage']);
    Route::get('admin/officespace/manage/{id}', [OfficespaceController::class, 'manage']);
    Route::post('admin/officespace/manage-officespace', [OfficespaceController::class, 'manage_officespace']);
    Route::get('admin/officespace/status/{status}/{id}', [OfficespaceController::class, 'status']);
    Route::get('admin/officespace/delete/{id}', [OfficespaceController::class, 'delete']);
    Route::get('admin/officespace/search/{str}', [OfficespaceController::class, 'search']);
    Route::get('admin/officespace/detail/{id}', [OfficespaceController::class, 'detail']);

    Route::get('admin/plot', [PlotController::class, 'index']);
    Route::get('admin/plot/manage', [PlotController::class, 'manage']);
    Route::get('admin/plot/manage/{id}', [PlotController::class, 'manage']);
    Route::post('admin/plot/manage-plot', [PlotController::class, 'manage_plot']);
    Route::get('admin/plot/status/{status}/{id}', [PlotController::class, 'status']);
    Route::get('admin/plot/delete/{id}', [PlotController::class, 'delete']);
    Route::get('admin/plot/search/{str}', [PlotController::class, 'search']);
    Route::get('admin/plot/detail/{id}', [PlotController::class, 'detail']);

    Route::get('admin/marketing-staff', [StaffController::class, 'index']);
    Route::get('admin/marketing-staff/manage', [StaffController::class, 'manage']);
    Route::get('admin/marketing-staff/manage/{id}', [StaffController::class, 'manage']);
    Route::post('admin/marketing-staff/manage-marketing-staff', [StaffController::class, 'manage_staff']);
    Route::get('admin/marketing-staff/status/{status}/{id}', [StaffController::class, 'status']);
    Route::get('admin/marketing-staff/delete/{id}', [StaffController::class, 'delete']);
    Route::get('admin/marketing-staff/search/{str}', [StaffController::class, 'search']);
    Route::get('admin/marketing-staff/detail/{id}', [StaffController::class, 'detail']);




    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout sucessfully');
        return redirect('admin');
    });
});

Route::group(['middleware' => 'staff_auth'], function () {

    Route::get('marketing-staff/retail/add', [StaffPropertyController::class, 'retail']);
    Route::post('marketing-staff/retail/manage-retail', [StaffPropertyController::class, 'manage_retail']);


    Route::get('marketing-staff/residential/add', [StaffPropertyController::class, 'residential']);
    Route::post('marketing-staff/residential/manage-residential', [StaffPropertyController::class, 'manage_residential']);

    Route::get('marketing-staff/officespace/add', [StaffPropertyController::class, 'officespace']);
    Route::post('marketing-staff/officespace/manage-officespace', [StaffPropertyController::class, 'manage_officespace']);

    Route::get('marketing-staff/plot/add', [StaffPropertyController::class, 'plot']);
    Route::post('marketing-staff/plot/manage-plot', [StaffPropertyController::class, 'manage_plot']);

    Route::get('marketing-staff/warehouse/add', [StaffPropertyController::class, 'warehouse']);
    Route::post('marketing-staff/warehouse/manage-warehouse', [StaffPropertyController::class, 'manage_warehouse']);




    Route::get('marketing-staff/logout', function () {
        session()->forget('STAFF_LOGIN');
        session()->forget('STAFF_ID');
        session()->flash('error', 'Logout sucessfully');
        return redirect('marketing-staff');
    });
});


Route::get('search/{query}', [FrontController::class, 'search']);

Route::get('detail/{cat}/{slug}', [FrontController::class, 'detail']);


