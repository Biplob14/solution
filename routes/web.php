<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kacchiController;

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
Route::get('/kacchi', function () {
    return view('kacchi');
});

Route::post('/kacchiStore', [kacchiController::class, 'store'])->name('kacchiStore');
