<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SponsorChangeController;
use App\Http\Controllers\VisaController;
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


Route::resource('/projects', ProjectController::class);

Route::resource('/visas', VisaController::class);

Route::resource('customers',  CustomerController::class);
Route::resource('sponsor_changes',  SponsorChangeController::class);