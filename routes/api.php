<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DeviceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/data/{id?}',[StudentController::class,'getdata']);
Route::post('/add',[DeviceController::class,'add']);
Route::put('/update',[DeviceController::class,'update']);
Route::get('/search/{name}',[DeviceController::class,'search']);
Route::delete('/delete/{id}',[DeviceController::class,'destroy']);