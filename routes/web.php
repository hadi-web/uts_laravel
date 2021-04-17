<?php

use Illuminate\Support\Facades\Route;
use App\Models\Surat;
use App\Http\Controllers\SuratController;

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
    $surat = Surat::all();
    return view('home', compact('surat'));
});
Route::get('surat/trash', [SuratController::class, 'trash']);
Route::get('surat/restore/{id?}', [SuratController::class, 'restore']);
Route::get('surat/delete/{id?}', [SuratController::class, 'deleted']);
Route::resource('surat', SuratController::class);
