<?php

use Illuminate\Support\Facades\Route;
use App\Models\Notebook;
use App\Http\Controllers\NotebookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/v1/notebooks', [NotebookController::class, 'index']);
Route::get('api/v1/notebooks/{id}', [NotebookController::class, 'show']);
Route::post('api/v1/notebooks', [NotebookController::class, 'store']);
Route::delete('api/v1/notebooks/{id}', [NotebookController::class, 'destroy']);
Route::post('api/v1/notebooks/{id}', [NotebookController::class, 'update']);