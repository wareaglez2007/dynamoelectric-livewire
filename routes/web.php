<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainHomePage;
use App\Http\Livewire\AltNavigationMenu;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\PagesLiveWireController;
use Illuminate\Support\Facades\Route;
use App\View\Components\FrontAppLayout;

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

/**
 * Backend logic
 */
Route::middleware(['auth:sanctum', 'verified'])->prefix('secured')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('secured');
});

/**
 * Frontend Logic
 * Any front end stuff should go here
 */
Route::prefix('')->group(function () {


    Route::get('', function(){
        return view('frontdashboard');
    });
    //Route::get('/homepage', PagesLiveWireController::class)->name('homepage');
    /**
     * Frontend routes taht I will need
     * 1. PagesLivewireController (to control the dynamic pages)
     * 2.
     */

});


