<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use App\Models\Banner;
use App\Models\Storie;
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
}
