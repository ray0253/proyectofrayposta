<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductoModelo;
use App\Http\Controllers\UploadController;

class ProductsController extends Controller
{

  public function index()
  {
      //return view('products');
      $products = ProductoModelo::paginate(2);
    
      return view ("products",["products"=>$products]);
  }

  public function save(Request $request)
  { dd($request);
    $rq= $request->all();
    $inputs = ($request['imagen'] == null) ? $request['imagen'] : $request['imagen']->getClientOriginalName();
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
