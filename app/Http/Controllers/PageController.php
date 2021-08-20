<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use App\Models\Banner;
use App\Models\Storie;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'banners' => Banner::with(['image'])->get(),
            'pratos'  => Prato::inRandomOrder()->take(5)->get(),
            'stories' => Storie::latest()->take(6)->get()
        ]);
    }

    public function cardapio()
    {
        return view('cardapio', [
            'categorias' => Categoria::with(['image'])->get(),
            'stories' => Storie::latest()->take(3)->get()
        ]);
    }

    public function categoria(Categoria $categoria)
    {
        return view('categoria', [
            'categoria' => $categoria->load('pratos.images'),
        ]);
    }

    public function prato(Categoria $categoria, Prato $prato)
    {
        return view('prato', [
            'prato' => $prato->load(['images', 'categoria.image']),
        ]);
    }
}
