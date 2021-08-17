<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $banner1 = (object) [
            'title' => 'Title 1',
            'subtitle' => 'Subtitle 1',
            'description' => 'Lorem ipsum'
        ];

        $banner2 = (object) [
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
