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

                $extension = $request->file('avatar')->extension();

                $path = $request->file('avatar')->storeAs(
                    'categorias',
                    "$categoria->id.$extension",
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

    public function destroy(Categoria $categoria)
    {
        
        try{

            $img_paths_to_delete = ( $categoria->image )? [$categoria->image->path] : [];
            
            foreach($categoria->pratos as $prato)
                foreach($prato->images as $image)
                    array_push($img_paths_to_delete, $image->path);

        } catch (\Throwable $th) {
            return back()->with('message', 'Falha ao ler imagens do banco de dados. msg: '. $th->getMessage());
        }
        
        try{

            DB::beginTransaction();

            foreach($categoria->pratos as $prato){
                $prato->translations()->delete();
                $prato->delete();
            }

            $categoria->translations()->delete();
            $categoria->delete();

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            return Redirect::route('adm.categorias.show', ['categoria' => $categoria->id])
                            ->with('erros', ['error' => 'Falha ao deletar categoria do banco de dados. msg: '. $th->getMessage() ]);
        }

        try {
            
            if(count($img_paths_to_delete))
                Storage::delete($img_paths_to_delete);

            return Redirect::route('adm.categorias.index');

        } catch (\Throwable $th) {
            return Redirect::route('adm.categorias.show', ['categoria' => $categoria->id])
                            ->with('erros', ['error' => 'Falha ao deletar arquivos físicos. msg: '. $th->getMessage() ]);
        }
    }
    
}
