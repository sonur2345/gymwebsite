<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AddPlanController;
use App\Http\Middleware\dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['dashboard'])->group(function () {
 
//AddPlan management
Route::post('/AddPlan/save',[AddPlanController::class,'Add_plan_save']);


    // Role Management 
Route::get('/Role',[DashboardController::class,'Role_manage'])->name('Role_Manage');
Route::post('/Role/add',[DashboardController::class,'Role_Add']);
Route::post('/Role/{id}/edit',[DashboardController::class,'Role_edit']);
Route::get('/Role/{id}/delete',[DashboardController::class,'Role_delete']);



// Employee Management
Route::get('/Employee',[EmployeeController::class,'Employee_manage'])->name('Employee_Manage');
Route::post('/Employee/add',[EmployeeController::class,'Employee_Save'])->name('Employee_save');
Route::post('/Employee/{id}/edit',[EmployeeController::class,'Employee_edit']);
Route::get('/Employee/{id}/delete',[EmployeeController::class,'Employee_delete']);




//Enquiry management 
Route::get('/Enquiry',[DashboardController::class,'Enquiry_manage'])->name('Enquiry_Manage');

//Members management 
Route::get('/Members',[DashboardController::class,'Members_manage'])->name('Members_Manage');

//Pakage management 
Route::get('/Package',[DashboardController::class,'Package_manage'])->name('Pakage_Manage');

//Report management 
Route::get('/Report',[DashboardController::class,'Report_manage'])->name('Report_Manage');

//Enquiry management 
Route::get('/Trial',[DashboardController::class,'Trial_manage'])->name('Trial_Manage');
});


