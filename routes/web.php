<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
});

Route::post('/salva-conta', function (Request $request) {
   // dd($request);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();


    return "Usuario salvo com sucesso";

})->name('salva-conta');




Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');







Route::get('/teste', function () {
    return "O código foi testado";
});

Route::get('/usuario/{nome}', function ($nome) {
    return "O usuário atual é: ".$nome;
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return "A soma é: ". $num1 + $num2;
});


