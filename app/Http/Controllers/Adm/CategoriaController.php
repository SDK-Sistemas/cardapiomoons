<?php

namespace App\Http\Controllers\Adm;

use App\Models\Categoria;
use App\Models\Storie;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
     /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Categorias/Index', [
            'categorias' => Categoria::all(),
        ]);
    }

    public function show(Categoria $categoria)
    {
        return Inertia::render('Categorias/Show', [
            'categoria' => $categoria
        ]);

    }
}
