<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGenerator;
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
    return view('welcome');
});

Route::get('generate-pdf',[PdfGenerator::class,'generatePdf'])->name('generate-pdf');
Route::get('bladepdf',[PdfGenerator::class,'bladepdf'])->name('bladepdf');