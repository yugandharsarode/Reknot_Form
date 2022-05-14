<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Intern;

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

Route::get('/index', [RegisterController::class, 'index']);
Route::post('/index', [RegisterController::class, 'store']);

Route::get('/display', [RegisterController::class, 'display']);

Route::get('/edit_data/edit/{id}', [RegisterController::class, 'edit']);

Route::post('/edit_data/update/{id}', [RegisterController::class, 'update']);
