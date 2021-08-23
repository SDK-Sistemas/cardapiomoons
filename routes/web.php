<?php

use App\Http\Controllers\PageController;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
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

Route::middleware([SetLocale::class])->group(function () {

    Route::get('/', [PageController::class, 'home'])
        ->name('home');

    Route::get('/cardapio', [PageController::class, 'cardapio'])
        ->name('cardapio');

    Route::get('/cardapio/{categoria}', [PageController::class, 'categoria'])
        ->name('categoria');

    Route::get('/cardapio/{categoria}/{prato}', [PageController::class, 'prato'])
        ->name('prato');

    Route::view('/quem-somos', 'quem-somos')
        ->name('quem-somos');

    Route::view('/contato', 'contato')
        ->name('contato');

    Route::view('/reservas', 'reservas')
        ->name('reservas');
});

Route::post('/lang', function (Request $request) {
    Session::put('lang', $request->lang);
    return back();
})->name('lang');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
