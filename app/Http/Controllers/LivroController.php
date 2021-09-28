<?php

namespace App\Http\Controllers;

use App\Models\Livro as Livro;
use App\Http\Resources\Livro as LivroResource;
use Illuminate\Http\Request;

class LivroController extends Controller {
    public function index(){
        $livros = Livro::paginate(15);
        return LivroResource::collection($livros);
      }
    
      public function show($id){
        $livro = Livro::findOrFail( $id );
        return new LivroResource( $livro );
      }
    
      public function store(Request $request){
        $livro = new Livro;
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->paginas = $request->input('paginas');
    
        if( $livro->save() ){
          return new LivroResource( $livro );
        }
      }
    
       public function update(Request $request){
        $livro = Livro::findOrFail( $request->id );
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->paginas = $request->input('paginas');
    
        if( $livro->save() ){
          return new LivroResource( $livro );
        }
      } 
    
      public function destroy($id){
        $livro = Livro::findOrFail( $id );
        if( $livro->delete() ){
          return new LivroResource( $livro );
        }
      }
}
