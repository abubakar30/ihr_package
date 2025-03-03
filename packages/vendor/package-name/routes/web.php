<?php
use Illuminate\Support\Facades\Route;
use Vendor\PackageName\Controllers\ExampleController;

Route::get('/package-example', [ExampleController::class, 'index']);
Route::post('/package-example', [ExampleController::class, 'store']);
