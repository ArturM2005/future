<?php

use Illuminate\Support\Facades\Route;
use App\Models\Notebook;
use App\Http\Controllers\NotebookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/v1/notebook', [NotebookController::class, 'index']);