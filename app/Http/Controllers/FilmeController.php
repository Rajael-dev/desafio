<?php

namespace App\Http\Controllers;

use App\Models\Filme as Filme;
use App\Http\Resources\Filme as FilmeResource;
use Illuminate\Http\Request;

class FilmeController extends Controller {
    public function index(){
        $filmes = Filme::paginate(15);
        return FilmeResource::collection($filmes);
      }
    
      public function show($id){
        $filme = Filme::findOrFail( $id );
        return new FilmeResource( $filme );
      }
    
      public function store(Request $request){
        $filme = new Filme;
        $filme->titulo = $request->input('titulo');
        $filme->descricao = $request->input('descricao');
        $filme->duracao = $request->input('duracao');
    
        if( $filme->save() ){
          return new FilmeResource( $filme );
        }
      }
    
       public function update(Request $request){
        $filme = Filme::findOrFail( $request->id );
        $filme->titulo = $request->input('titulo');
        $filme->descricao = $request->input('descricao');
        $filme->duracao = $request->input('duracao');
    
        if( $filme->save() ){
          return new FilmeResource( $filme );
        }
      } 
    
      public function destroy($id){
        $filme = Filme::findOrFail( $id );
        if( $filme->delete() ){
          return new FilmeResource( $filme );
        }
      }
}
