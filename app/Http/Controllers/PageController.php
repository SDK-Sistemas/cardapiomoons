<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use App\Models\Banner;
use App\Models\Storie;
use App\Models\Categoria;

class PageController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function cardapio(): \Illuminate\Contracts\View\View
    {

    }

    /**
     * @param Categoria $categoria
     * @return \Illuminate\Contracts\View\View
     */
    public function categoria(Categoria $categoria)
    {

    }

    /**
     * @param Categoria $categoria
     * @param Prato $prato
     * @return \Illuminate\Contracts\View\View
     */
    public function prato(Categoria $categoria, Prato $prato)
    {
        return view('prato', [
            'prato' => $prato->load(['images', 'categoria.image']),
        ]);
    }
}
