<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\ChangeLocale;
use App\Http\Middleware\SetDefaultLocaleForUrls;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;

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

Route::middleware([SetDefaultLocaleForUrls::class])->group(function () {
    
    Route::view('/', 'home')
        ->name('home');
    
    Route::view('/cardapio', 'cardapio')
        ->name('cardapio');
    
});

Route::post('/lang', function(Request $request){
    Session::put('lang', $request->locale);
    return back();
})->name('lang');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
