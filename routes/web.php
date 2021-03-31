<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ChildProfileController;
use App\Http\Controllers\AdminController;
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
    return view('auths.log');
})->name('login');

Route::get('/logout',[AuthController::class,'logout']);

Route::post("/postlogin",[AuthController::class,'postlogin']);
Route::post('/register',[AuthController::class,'register']);

//Child
Route::group(['middleware' => ['auth','checkRole:user']],function(){
    Route::get('/children',[ChildController::class,'children']);
    //Form аас post аар өгөгдлүүд шидэх
    Route::post('/children/create',[ChildController::class,'create']);
    
    //Edit дарсныг нь авна
    Route::get('/children/{id}/edit',[ChildController::class,'edit']);
    
    //Edit авсан өгөдлийг шинэжлээд DB шидэх
    Route::post('/children/{id}/update',[ChildController::class,'update']);
    
    //Delete дарсныг нь авна
    Route::get('/children/{id}/delete',[ChildController::class,'delete']);
    
    //Profile
    Route::get('/children/{id}/profile',[ChildProfileController::class,'profile']);
    
    Route::post('/children/{id}/profile/add',[ChildProfileController::class,'add']);
    
    
    
    Route::get('children/{id}/profile/vaccine/{ids}',[ChildProfileController::class,'viewVaccine']);
    
    Route::post('children/{id}/profile/vaccine/{ids}/record',[ChildProfileController::class,'record']);
});

Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){
    Route::get('/admin',[AdminController::class,'admin']);
    Route::get('/vaccine',[AdminController::class,'vaccine']);
    Route::post('/vaccine/create',[AdminController::class,'addVaccine']);
});
