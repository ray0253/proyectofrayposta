<?php

namespace App\Http\Controllers;
use App\MarcaModelo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarcasController extends Controller
{
  public function save(Request $request)
  {
    MarcaModelo::create($request->all());
    $marcas = MarcaModelo::all();
    return view ("admin",["marcas"=>$marcas]);
  }


}
