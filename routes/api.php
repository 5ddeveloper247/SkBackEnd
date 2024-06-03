<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\frontEnd\MediaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('frontend')->group(function () {
    //property
    Route::post('/home/register/property', [HomeController::class, 'index'])->name('api.frontend.home.register.property');
    Route::get('/home/property/get', [HomeController::class, 'propertyHomeView'])->name('api.frontend.home.property.homeView');
    Route::post('/home/property/getByFilters', [HomeController::class, 'mediaIndexgetByFilters'])->name('api.frontend.media.getByFilters');

    Route::get('/home/property/getbyid/{id}', [HomeController::class, 'getPropertyDetailbyId'])->name('api.frontend.home.property.getbyid');


    //media
    Route::get('/home/media/get', [MediaController::class, 'mediaIndex'])->name('api.frontend.media.get');
});
