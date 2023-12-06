<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;
// use App\Http\Controllers\HelloController;

// Route::get('/test', [TestController::class, 'index']);

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/test/{room}/{id}', function ($room, $id) {
//     return 'roomが' . $room . 'でidは' . $id . 'です';
// });

// Route::get('/test/{greeting?}', function($greeting = 'Goodmorning') {
//     return $greeting . '=おはようございます';
// });

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post']);