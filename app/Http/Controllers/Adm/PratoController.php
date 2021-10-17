<?php

namespace App\Http\Controllers\Adm;

use App\Models\Categoria;
use App\Models\Prato;
use App\Models\Image;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Storage;

class PratoController extends Controller
{
    
    public function create(Categoria $categoria)
    {
        return Inertia::render('Pratos/Create', [
            'categoria' => Categoria::with('pratos')->whereId($categoria->id)->first()
        ]);
    }

    public function store(Categoria $categoria, Request $request)
    {
        try {
                      
            DB::beginTransaction();

            $prato = Prato::create([
                'categoria_id' => $categoria->id,
                'price' => floatval($request->price)
            ]);
            
            foreach ($request['translations'] as $translate){
                $prato->translations()->create([
                    'locale'      => $translate['locale'],
                    'translation' => [
                        'name' => $translate['translation']['name'],
                        'description' => $translate['translation']['description']
                    ]
                ]);
            }
            
            $this->saveAvatar($request, $prato);

            DB::commit();

            return Redirect::route('adm.categorias.pratos.show', ['categoria' => $categoria->id, 'prato' => $prato->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return Redirect::route('adm.categorias.pratos.show', ['categoria' => $categoria->id, 'prato' => $prato->id]);
        }
    }

    public function show(Categoria $categoria, Prato $prato)
    {
        return Inertia::render('Pratos/Show', [
            'categoria' => Categoria::with('pratos')->whereId($categoria->id)->first(),
            'prato' => $prato
        ]);

    }

    public function update(Categoria $categoria, Prato $prato, Request $request)
    {
        try {
                      
            DB::beginTransaction();

            $prato->price = floatval($request->price);
            $prato->save();

            foreach ($request['translations'] as $translate){
                $prato->translations()
                            ->where('locale', $translate['locale'])
                            ->update([ 
                                'translation->name' => $translate['translation']['name'],
                                'translation->description' => $translate['translation']['description'] 
                            ]);
            }

            $this->saveAvatar($request, $prato);

            DB::commit();

            return Redirect::route('adm.categorias.pratos.show', ['categoria' => $categoria->id, 'prato' => $prato->id]);

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return Redirect::route('adm.categorias.pratos.show', ['categoria' => $categoria->id, 'prato' => $prato->id]);
        }

    }

    private function saveAvatar(Request $request, Prato $prato)
    {
        try {
                       
            if( $request->file('avatar') != null ){
    
                $path = $request->file('avatar')->storeAs(
                    'pratos',
                    $prato->id,
                    'public'
                );
    
                $image = Image::firstOrCreate(
                    ['path' => $path ],
                    ['alt' => '']
                );
    
                $prato->images()->sync([$image->id]);
                
            }

            return $image ?? null;

        } catch (\Throwable $th) {
            throw $th; 
        }
    }
}