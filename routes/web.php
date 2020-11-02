<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
Route::get('pizzas/create', 'App\Http\Controllers\PizzaController@create');
Route::get('pizzas/{id}', 'App\Http\Controllers\PizzaController@show');
Route::delete('pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy');

