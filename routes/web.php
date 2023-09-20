<?php

namespace App\Http\Controllers;

use App\Http\Controllers\users\UserManagement;
use Illuminate\Support\Facades\Route;

//landing routes
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about-us', [LandingController::class, 'aboutUs'])->name('about-us');
Route::get('/book-demo', [LandingController::class, 'bookDemo'])->name('book-demo');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', [DashboardController::class, 'index']);
  Route::get('/users', [UserManagement::class, 'UserManagement'])->name('manage-users');
  Route::resource('/user-list', UserManagement::class);

  Route::get('/teams', [TeamMemberController::class, 'list'])->name('manage-teams');
  Route::resource('/teams-list', TeamMemberController::class);

  Route::get('/site-settings', [SiteSettingsController::class, 'index'])->name('site-settings');
  Route::post('/save-site-settings', [SiteSettingsController::class, 'store'])->name('save-site-settings');
});


