<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\Auth\RegisterController;
use App\Http\Controllers\BackEnd\Auth\LoginController;
use App\Http\Controllers\BackEnd\Dashboard\DashboarController;
use App\Http\Controllers\BackEnd\Dashboard\AdminController;
use App\Http\Controllers\BackEnd\Dashboard\MediaController;
use App\Http\Controllers\BackEnd\Dashboard\PropertyController;

//redirect if authenticated  
Route::middleware(['admin.redirect'])->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login.view');
    Route::post('/admin/login', [LoginController::class, 'handleLogin'])->name('admin.login.submit');
});



//check role admin before access
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('admin/admin/list', [AdminController::class, 'adminList'])->name('admin.list');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [DashboarController::class, 'Dashboard'])->name('admin.dashboard');
    Route::post('/admin/dashboard/create/admin', [DashboarController::class, 'createAdmins'])->name('admin.dashboard.create.admin');
    Route::get('/admin/admins', [AdminController::class, 'viewAdmins'])->name('admin.user.admins');
    Route::get('admin/users/admin/destroy/{id}', [AdminController::class, 'destroyAdmins'])->name('admin.user.destroy');


    // Add other admin routes here 


    // Add admin user Routes here
    Route::post('/admin/dashboard/user/user', [DashboarController::class, 'createUsers'])->name('admin.dashboard.create.user');
    Route::get('admin/user/list', [AdminController::class, 'userList'])->name('user.list');
    Route::get('/admin/users/guest', [AdminController::class, 'viewUsers'])->name('admin.user.admins');
    Route::get('admin/users/user/destroy/{id}', [AdminController::class, 'destroyUsers'])->name('admin.user.guest.destroy');
    Route::post('admin/users/admin/update/{id}', [AdminController::class, 'updateAdmin'])->name('admin.user.update');



    // Admin Media Routes here
    Route::post('/admin/dashboard/media/url', [MediaController::class, 'createMedia'])->name('admin.dashboard.create.media.url');
    Route::get('admin/media/list', [MediaController::class, 'mediaList'])->name('admin.media.list');
    Route::get('/admin/media/view', [MediaController::class, 'viewMedia'])->name('admin.media.view');
    Route::get('admin/media/media/destroy/{id}', [MediaController::class, 'destroyMedia'])->name('admin.media.guest.destroy');
    Route::post('/admin/dashboard/media/upload', [MediaController::class, 'uploadMedia'])->name('admin.dashboard.media.upload');



    //admin property listing
    Route::get('admin/property/listing', [PropertyController::class, 'propertyListing'])->name('admin.property.listing');
    Route::post('admin/property/main/submission', [PropertyController::class, 'propertyMainSubmission'])->name('admin.property.main.submission');
});
