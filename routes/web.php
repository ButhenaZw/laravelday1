<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;



// //--Deafult Route--//
// Route::get('/' ,function(){
//     return view('welcome', ['name' => 'Tamara']);
// });


//--Task1--//
// Route::get('/' ,function(){
//     return('Hello, World!');
// });
//--Task2--//
// Route::get('/hello/{name}', function ($name) {
//     return "Hello, $name!";
// });
//-Task3--//
// Route::get('/age/{age?}', function ($age = null) {
//     return "You are " . ($age ?? "Age not provided") . " years old.";
// });
//--Task4--//
// Route::get('/welcome', [WelcomeController::class, 'showWelcome']);
//--Task5--//
// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('homepage');
//--Task6--//
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });

//     Route::get('/users', function () {
//         return "Admin Users Page";
//     });
// });
//--Task7--//
// Route::get('/user/{id}', function ($id) {
//     return "User ID: $id";
// });
//--Task8--//
// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });
//--Task9--//
// Route::resource('posts', PostController::class);
//--Task10--//
// Route::get('/{library}/{id}', function ($kind, $id) {
//     return "Libraby: $kind, ID: $id";
// });
//--Task11--//
// Route::get('/task/{page?}', function ($page = 1) {
//     return "view page $page";
// });
//--Task12--//
// Route::redirect('/home', '/welcome');
//--Task13--//
// Route::get('/task13', function () {
//     return view('day1.task13');
// });

Route::get('/dash',function(){
    return view('layout.dashboard');
});
Route::get('/sec',function(){
    return view('layout.sectione');
});