<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindSum;
use App\Http\Controllers\Mailing;
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
    return view('welcome');
});
Route::post('add',[FindSum::class,'sum']);
Route::view('findSum','form');













Route::post('mail',[Mailing::class,'index']);
Route::view('sendmail','sendmail');