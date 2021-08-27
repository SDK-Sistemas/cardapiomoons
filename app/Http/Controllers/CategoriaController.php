<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Storie;
use Illuminate\Contracts\View\View;

/**
 *
 */
class CategoriaController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('categorias.index', [
            'categorias' => Categoria::query()
                ->with('image')
                ->get(),
            'stories' => Storie::query()
                ->take(3)
                ->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Categoria $categoria
     * @return View
     */
    public function show(Categoria $categoria): View
    {
        return view('categorias.show', [
            'categoria' => $categoria
                ->load('pratos.images'),
        ]);
    }
}
