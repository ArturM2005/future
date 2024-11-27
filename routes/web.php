<?php

use Illuminate\Support\Facades\Route;
use App\Models\Notebook;

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/v1/notebooks', function () {
    return Notebook::all();
});