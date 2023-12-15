<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UserInfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
// Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [UserInfoController::class, 'show_form'])->name('registration.form');
Route::post('/register',[UserInfoController::class, 'submit_form'])->name('registration.post');


// Route::get('/sample', [SampleController::class, 'getAll']); // plain echo db data
// Route::get('/sample', [SampleController::class, 'getParticular']);
Route::get('/sample', [SampleController::class, 'passToView']); // put db data inside a view