<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Prato;
use Illuminate\Contracts\View\View;

/**
 *
 */
class PratoController extends Controller
{
    /**
     * @param Categoria $categoria
     * @param Prato $prato
     * @return View
     */
    public function show(Categoria $categoria, Prato $prato): View
    {
        return view('categorias.pratos.show', [
            'prato' => $prato->load(['images', 'categoria.image']),
        ]);
    }
}
