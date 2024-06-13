<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('about', function () {
    $name="peerawat";
    $date="05/06/2024";
    return view('about',compact('name','date'));
});





Route::fallback(function(){
    return '<h1>ไม่พบหน้าเว็บ</h1>';

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home',[Homecontroller::class, 'adminHome'])->name('admin.home')->Middleware('is_admin');
 