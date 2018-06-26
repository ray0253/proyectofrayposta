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
  { //dd($request->all());
    $rq= $request->all();
    $inputs = ($request == null) ? $request['imagen'] : $request['imagen']->getClientOriginalName();
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
