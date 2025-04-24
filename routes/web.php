<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website');
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


    return redirect()->intended('login');

})->name('salva-conta');




Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/logar', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'O email e senha digitados não são válidos',
    ])->onlyInput('email');
})->name('logar');



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


