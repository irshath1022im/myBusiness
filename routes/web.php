<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SponsorChangeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\VisaHolderController;
use App\Models\Customer;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('supplier', SupplierController::class);
Route::resource('purchase', PurchaseController::class);
Route::resource('payment', PaymentController::class);
Route::resource('/projects', ProjectController::class);
Route::resource('/sales', SaleController::class);

Route::resource('/visas', VisaController::class);
Route::resource('/visaholders', VisaHolderController::class);

Route::resource('customers',  CustomerController::class);
Route::resource('sponsor_changes',  SponsorChangeController::class);
