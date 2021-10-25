<?php
declare(strict_types=1);

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChangeLanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PratoController;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

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

use Illuminate\Support\Facades\Artisan;

Route::get('/migrar', function () {
   
	Artisan::call('migrate:refresh', [
		'--force' => true,
		'--seed' => true,
	]);
	
	Artisan::call('db:seed', [
		'--class' => 'CardapioBebidasSeeder',
	]);

});

Route::get('/storage-link', function () {
   
	Artisan::call('storage:link');
		
});


Route::post('/', ChangeLanguageController::class)
    ->name('lang');

Route::middleware([SetLocale::class])->group(function () {

    Route::get('/', HomeController::class)
        ->name('home');

    Route::view('/quem-somos', 'quem-somos')
        ->name('quem-somos');

    Route::view('/contato', 'contato')
        ->name('contato');

    Route::view('/reservas', 'reservas')
        ->name('reservas');

    Route::prefix('/cardapio')->group( function () {

        Route::get('/', [CategoriaController::class, 'index'])
            ->name('cardapio');
        
        Route::get('/bar', [CategoriaController::class, 'bar'])
            ->name('bar');

        Route::get('/{categoria}', [CategoriaController::class, 'show'])
            ->name('categoria');

        Route::get('/{categoria}/{prato}', [PratoController::class, 'show'])
            ->name('prato');
    });
});

Route::middleware(['auth', 'verified'])->name('adm.')->prefix('adm')->group( function () {
    Route::resources([
        'categorias' => 'App\Http\Controllers\Adm\CategoriaController',
        'categorias.pratos' => 'App\Http\Controllers\Adm\PratoController',
        'users' => 'App\Http\Controllers\Adm\UserController'
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
