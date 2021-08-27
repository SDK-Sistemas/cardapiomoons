<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Prato;
use App\Models\Storie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Redireciona para home do site
 */
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('home', [
            'banners' => Banner::query()
                ->get(),
            'pratos'  => Prato::query()
                ->with('categoria')
                ->inRandomOrder()
                ->take(5)
                ->get(),
            'stories' => Storie::query()
                ->latest()
                ->take(6)
                ->get()
        ]);
    }
}
