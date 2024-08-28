<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ExcelImportController;

Route::get('/import', [ExcelImportController::class, 'showForm']);
Route::post('/import', [ExcelImportController::class, 'import'])->name('import');