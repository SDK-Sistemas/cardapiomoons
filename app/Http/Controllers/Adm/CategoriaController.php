<?php

namespace App\Http\Controllers\Adm;

use App\Models\Categoria;
use App\Models\Storie;
use App\Models\Image;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Storage;

class CategoriaController extends Controller
{
     /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Categorias/Index', [
            'categorias' => Categoria::with('image')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Categorias/Create');
    }

    public function store(Request $request)
    {
        try {
            
            DB::beginTransaction();
              
            $categoria = Categoria::create();

            foreach ($request['translations'] as $translate){
                $categoria->translations()->create([
                    'locale'      => $translate['locale'],
                    'translation' => ['name' => $translate['translation']['name'] ]
                ]);
            }

            $this->saveAvatar($request, $categoria);

            DB::commit();

            return Redirect::route('adm.categorias.show', ['categoria' => $categoria->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return back();
        }

    }


    public function show(Categoria $categoria)
    {
        return Inertia::render('Categorias/Show', [
            'categoria' => Categoria::with('pratos')->whereId($categoria->id)->first()
        ]);

    }

    public function edit(Categoria $categoria)
    {
        return Inertia::render('Categorias/Edit', [
            'categoria' => $categoria
        ]);

    }

    public function update(Categoria $categoria, Request $request)
    {
        try {
            
            DB::beginTransaction();
            
            foreach ($request['translations'] as $translate){
                $categoria->translations()
                            ->where('locale',$translate['locale'])
                            ->update([ 'translation->name' => $translate['translation']['name'] ]);
            }

            $this->saveAvatar($request, $categoria);
            
            DB::commit();

            return Redirect::route('adm.categorias.show', ['categoria' => $categoria->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return back();
        }

    }

    private function saveAvatar(Request $request, Categoria $categoria)
    {
        try {
                       
            if( $request->file('avatar') != null ){
    
                $path = $request->file('avatar')->storeAs(
                    'categorias',
                    $categoria->id,
                    'public'
                );
    
                $image = Image::firstOrCreate(
                    ['path' => $path ],
                    ['alt' => '']
                );
    
                $categoria->image_id = $image->id;
                $categoria->save();
            }

            return $image ?? null;

        } catch (\Throwable $th) {
            throw $th; 
        }
    }
}
