<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductoModelo;
use App\Http\Controllers\UploadController;

class ProductsAdminController extends Controller
{

public function index(){
  $products = ProductoModelo::all();
  return view ("productsAdmin",["products"=>$products]);
}
  public function save(Request $request)
  { 
    $rq= $request->all();
    if (is_string($rq['valor'])== true ) {
      $rq['valor'] = 0;
    }
    $rq['name'] = ($request['name'] == null) ? $request['name'] = "no tiene nombre el producto" : $request['name']->getClientOriginalName();
    $inputs = ($request['imagen'] == null) ? "" : $request['imagen']->getClientOriginalName();
    $rq['imagen']=$inputs;
    ProductoModelo::create($rq);
    $upLoad = UploadController::upload($request);
    return back();
  }

  public function deletePro($id){

    ProductoModelo::destroy($id);
    return back();

  }

}
