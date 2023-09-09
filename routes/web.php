<?php

use App\Http\Controllers\users\UserManagement;
use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';
//landing routes


Route::group(['middleware' => 'auth'], function (){
  Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
  Route::get('/home', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
  Route::get('/users', [UserManagement::class, 'UserManagement'])->name('manage-users');
  Route::resource('/user-list', UserManagement::class);

  Route::get('/teams', [\App\Http\Controllers\TeamMemberController::class, 'list'])->name('manage-teams');
  Route::resource('/teams-list', \App\Http\Controllers\TeamMemberController::class);
});

Route::get('/landing', function () {
  return view('landing');
});
