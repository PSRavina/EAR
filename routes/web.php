<?php

use App\Exports\AverageItems;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Exports\RequestFormulary;
use Maatwebsite\Excel\Facades\Excel;


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
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard', [App\Http\Controllers\SurveyController::class, 'send']);

Route::middleware(['auth:sanctum', 'verified'])->get('/completereport', function () {
    return Excel::download(new RequestFormulary, 'ReporteCompleto.xlsx');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/items', function () {
    return Excel::download(new AverageItems, 'MediasPorBloques.xlsx');
});
