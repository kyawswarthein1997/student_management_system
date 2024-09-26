<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::group(['prefix'=>'admin'], function(){
    Route::group(['middleware'=>'admin.guest'], function(){
        Route::get('login',[AdminController::class, 'index'])->name('admin.login'); // Admin Login Page
        Route::post('login',[AdminController::class, 'authenticate'])->name('admin.authenticate'); // Admin Login Authentication
        Route::get('register',[AdminController::class, 'register'])->name('admin.register'); // Admin registeration
    });
    Route::group(['middleware'=>'admin.auth'], function(){
        Route::get('logout',[AdminController::class, 'logout'])->name('admin.logout'); // Admin Logout
        Route::get('dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard'); // Admin Dashbaord Page
        Route::get('form',[AdminController::class, 'form'])->name('admin.form'); // Admin Form Page
        Route::get('table',[AdminController::class, 'table'])->name('admin.table'); // Admin Table Page
    });
});




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
