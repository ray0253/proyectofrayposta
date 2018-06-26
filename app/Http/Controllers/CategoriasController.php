<?php

namespace App\Http\Controllers;
use App\CategoriaModelo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
  public function save(Request $request)
  {
    CategoriaModelo::create($request->all());
    $categorias = CategoriaModelo::all();
    return view ("categorias",["categorias"=>$categorias]);
  }

  public function index(){
    $categorias = CategoriaModelo::all();
    return view ("categorias",["categorias"=>$categorias]);

  }

  public function delete($id){
    
    $categorias = CategoriaModelo::all();
    return view ("categorias",["categorias"=>$categorias]);

  }
}
