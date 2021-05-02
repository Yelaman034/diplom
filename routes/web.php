<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ChildProfileController;
use App\Http\Controllers\GrowthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserProfileController;
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

    Route::get('/profile',[UserProfileController::class,'userProfile']);
    Route::post('/profile/{id}/update',[UserProfileController::class,'userUpdate']);

    Route::get('/children',[ChildController::class,'children']);
    //Form аас post аар өгөгдлүүд шидэх
    Route::post('/children/create',[ChildController::class,'addChild']);
    
    //Edit дарсныг нь авна
    Route::get('/children/{id}/edit',[ChildController::class,'editChild']);
    
    //Edit авсан өгөдлийг шинэжлээд DB шидэх
    Route::post('/children/{id}/update',[ChildController::class,'updateChild']);
    
    //Delete дарсныг нь авна
    Route::get('/children/{id}/delete',[ChildController::class,'deleteChild']);
    
    //Profile
    Route::get('/children/{id}/profile',[ChildProfileController::class,'profile']);
    
    //Growth
    Route::post('/children/{id}/profile/addGrowth',[GrowthController::class,'addGrowth']);

    Route::post('/children/{id}/growth/edit',[GrowthController::class,'editGrowth']);
    
    Route::post('/delete',[GrowthController::class,'destroy']);

    //growth graph
    Route::get('/children/{id}/profile/chart',[ChartController::class,'checkChart']);
    
    //Vaccine info
    Route::get('/vaccines',[VaccineController::class,'vaccinesList']);
    Route::get('/vaccine/{id}',[VaccineController::class,'vaccine']);
    
    //vaccine Reg
    Route::get('children/{id}/profile/vaccine/{ids}',[VaccineController::class,'viewVaccine']);
    
    Route::post('children/{id}/profile/vaccine/{ids}/record',[VaccineController::class,'vaccineRegistration']);
    //edit
    Route::get('children/{id}/vaccineReg/{ids}/edit',[VaccineController::class,'editVaccineRegistration']);
    Route::post('children/{id}/vaccineReg/{ids}/update/',[VaccineController::class,'updateVaccineRegistration']);

    //new vaccine reg modal
    Route::post('children/{id}/vaccRecord',[VaccineController::class,'vaccineRegNew']);
    
    Route::post('/children/{id}/vaccRecordEdit',[VaccineController::class,'vaccineRegUpdateNew']);



    
});

Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){
    Route::get('/admin',[AdminController::class,'admin']);
    Route::get('/vaccine',[AdminController::class,'vaccine']);
    Route::post('/vaccine/create',[AdminController::class,'addVaccine']);

    Route::get('/consumer',[AdminController::class,'consumer']);
});
