<?php

use App\Http\Controllers\ActualLocationController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HajjOfficesController;
use App\Http\Controllers\JamaratLevelController;
use App\Http\Controllers\JamaratSchedulesController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PathController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\PrimaryRoadController;
use App\Http\Controllers\ResidentialAreaController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\VirtualLocationController;
use App\Models\JamaratLevel;
use App\Models\Nationality;
use App\Models\Office;
use App\Models\PrimaryRoad;
use App\Models\VirtualLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/location' , [VirtualLocationController::class ,'store']);
Route::post('/batchStore' , [BatchController::class ,'store']);
Route::post('/jamaratStore' , [JamaratSchedulesController::class ,'store']);



Route::get('/ActualLocations' , [ActualLocationController::class ,'index']);
Route::get('/Batches' , [BatchController::class ,'index']);
Route::get('/Companies' , [CompanyController::class ,'index']);
Route::get('/HajjOffices' , [HajjOfficesController::class ,'index']);
Route::get('/levels' , [JamaratLevelController::class ,'index']);
Route::get('/nationalites' , [NationalityController::class ,'index']);
Route::get('/Offices' , [OfficeController::class ,'index']);
Route::get('/Paths' , [PathController::class ,'index']);
Route::get('/Plots' , [PlotController::class ,'index']);
Route::get('/primaryRoads' , [PrimaryRoadController::class ,'index']);
Route::get('/ResidentialAreas' , [ResidentialAreaController::class ,'index']);
Route::get('/shapes' , [ShapeController::class ,'index']);
Route::get('/VirtualLocations' , [VirtualLocationController::class ,'index']);















