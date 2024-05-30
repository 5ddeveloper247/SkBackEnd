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
    Route::post('/home/register/property', [HomeController::class, 'index'])->name('api.frontend.home.register.property');
    Route::get('/home/media/get', [MediaController::class, 'mediaIndex'])->name('api.frontend.media.get');
});
