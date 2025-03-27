<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
});


Route::get('/teste', function () {
    return "o codigo foi testado";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "o usuario atual é:".$nome;
});

Route::get('/soma/{num1}/{num2}', function ($num1,$num2) {
    return "a soma é:".$num1 + $num2;
});

Route::get('/divisão/{num1}/{num2}', function ($num1,$num2) {
    return "a divisão é:".$num1 / $num2;
});

Route::get('/multiplicação/{num1}/{num2}', function ($num1,$num2) {
    return "a soma é:".$num1 * $num2;
});

Route::get('/subtração/{num1}/{num2}', function ($num1,$num2) {
    return "a soma é:".$num1 - $num2;
});























































