<?php

namespace App\Http\Controllers\Adm;

use App\Models\Categoria;
use App\Models\User;
use App\Models\Storie;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Users/Index', [
            'Users' => User::all(),
        ]);
    }

    public function show(User $User)
    {
        return Inertia::render('Users/Show', [
            'User' => $User
        ]);

    }
}
