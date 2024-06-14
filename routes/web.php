<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('auth/login', function () {
    return view('auth/login');
})->name('auth/login');

Route::get('about', function () {
    $name="peerawat";
    $date="05/06/2024";
    return view('about',compact('name','date'));
});


Route::get('dashboard', function(){
    return view('dashboard');
});
Route::get('Equipment', function(){
    return view('Equipment');
});
Route::get('formEquiment/importEquiment', function(){
    return view('formEquiment/importEquiment');
});
//exportEquiment
Route::get('formEquiment/exportEquiment', function(){
    return view('formEquiment/exportEquiment');
});

Route::fallback(function(){
    return '<h1>ไม่พบหน้าเว็บ</h1>';

});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home',[Homecontroller::class, 'adminHome'])->name('admin.home')->Middleware('is_admin');
// routes/web.php

// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
