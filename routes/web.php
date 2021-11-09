<?php

use App\Http\Controllers\TodoController;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
Route::get('/', [TodoController::class,'index']);
Route::post('/add', [TodoController::class,'add']);
Route::post('/update/{id}', [TodoController::class,'update']);
Route::get('delete/{id}',[TodoController::class,'delete']);
Route::get('/done/{id}', [TodoController::class,'done']);
