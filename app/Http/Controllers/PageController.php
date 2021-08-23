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
    public function home()
    {
        return view('home', array(
            'banners' => Banner::all(),
            'pratos'  => Prato::with('categoria')
                ->inRandomOrder()
                ->take(5)
                ->get(),
            'stories' => Storie::latest()
                ->take(6)
                ->get()
        ));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function cardapio(): \Illuminate\Contracts\View\View
    {
        return view('cardapio', [
            'categorias' => Categoria::with(['image'])->get(),
            'stories' => Storie::latest()->take(3)->get()
        ]);
    }

    /**
     * @param Categoria $categoria
     * @return \Illuminate\Contracts\View\View
     */
    public function categoria(Categoria $categoria)
    {
        return view('categoria', [
            'categoria' => $categoria->load('pratos.images'),
        ]);
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
