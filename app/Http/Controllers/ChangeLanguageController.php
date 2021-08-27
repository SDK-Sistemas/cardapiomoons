<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Change the locale
 */
class ChangeLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        Session::put('lang', $request->input('lang') );
        return back();
    }
}
