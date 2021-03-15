<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/lists',[\App\Http\Controllers\UserController::class,'index'])->name('users.lists');


//login using github
Route::get('auth/github', [\App\Http\Controllers\GitHubController::class,'redirect']);;
Route::get('auth/github/callback',[\App\Http\Controllers\GitHubController::class,'callback']);
