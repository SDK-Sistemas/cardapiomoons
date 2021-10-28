<?php

namespace App\Http\Controllers\Adm;

use App\Models\Categoria;
use App\Models\User;
use App\Models\Storie;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserUpdate;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(UserStore $request)
    {
        try{
            
            DB::beginTransaction();
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            DB::commit();

            return Redirect::route('adm.users.show', ['user' => $user->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return Redirect::route('adm.users.show', ['user' => $user->id]);
        }
    }

    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            'user' => $user
        ]);
    }

    public function update(User $user, UserUpdate $request)
    {
        try{
           
            DB::beginTransaction();
                    
            $user->name =  $request->name;
            $user->email =  $request->email;
            
            if( $request->password != null )
                $user->password = bcrypt($request->password);

            $user->save();

            DB::commit();

            return Redirect::route('adm.users.show', ['user' => $user->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return Redirect::route('adm.users.show', ['user' => $user->id]);
        }
    }
    
    public function destroy(User $user)
    {
        try{
            $user->delete();
            return Redirect::route('adm.users.index');

        } catch (\Throwable $th) {
            return Redirect::route('adm.users.show', ['user' => $user->id]);
        }
    }
}
