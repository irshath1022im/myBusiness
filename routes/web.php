<?php

use App\Http\Controllers\VisaController;
use App\Models\Customer;
use App\Models\Projects;
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


Route::get('/projects', function(){
    $query = Projects::with(['visas' => function($query){
        return $query->with('sale');
    }])->get();

    return view('projects', ['projects' => $query]);
});

Route::resource('/visas', VisaController::class);

Route::get('customers', function(){
    return Customer::with(['sales' => function($query){
        return $query->with('transections');
         }])
        ->get();
});