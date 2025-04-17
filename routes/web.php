<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

// Tela de cadastro
Route::get('/criar-conta', function () {
    return view('criar-conta');
})->name('criar-conta');

// Salva usuário
Route::post('/salva-conta', function (Request $request) {
   $user = new User();
   $user->name = $request->name;
   $user->email = $request->email;
   $user->password = $request->password;
   $user->password = Hash::make($request->password);//senha criptografada
   $user->save();

   return  redirect(route('login')); // redireciona ao login
})->name('salva-conta');

//Tela de login
Route::get('/login', function () {
    return view('login');
})->name('login');

//validação de login
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

//Dashboard)(pós longin)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Rotas de teste
Route::get('/teste', function () {
    return 'O código foi testado';
});

Route::get('/usuario/{nome}', function ($nome) {
    return 'o usuário atual é:'.$nome;
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























































