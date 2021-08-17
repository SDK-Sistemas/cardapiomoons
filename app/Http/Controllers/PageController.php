<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $banner1 = (object) [
            'image' => (object) [
                'path' => 'banners/teste.png',
                'alt'  => 'Teste'
            ],
            'title' => 'Title 1',
            'subtitle' => 'Subtitle 1',
            'description' => 'Lorem ipsum'
        ];

        $banner2 = (object) [
            'image' => (object) [
                'path' => 'banners/teste2.png',
                'alt'  => 'Teste'
            ],
            'title' => 'Title 2',
            'subtitle' => 'Subtitle 2',
            'description' => 'Lorem ipsum'
        ];

        $banners = collect([$banner1, $banner2]);

        return view('home', [
            'banners' => $banners
        ]);
    }
}
