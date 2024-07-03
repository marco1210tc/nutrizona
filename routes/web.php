<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
}); // para acceder a los dos botones

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', function () {
    return view('task.orders');
})->middleware('auth');

Route::get('/products', function () {
    return view('task.products');
})->middleware('auth');

Route::get('/statistics', function () {
    return view('task.statistics');
})->middleware('auth');

Route::get('/users', function () {
    return view('task.users');
})->middleware('auth');

Route::get('/records', function () {
    return view('task.records');
})->middleware('auth');

Route::get('cliente/carta', function () {
    return view('client.card');
});
