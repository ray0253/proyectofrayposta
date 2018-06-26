<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class UploadController extends Controller
{
    public static function upload(Request $request){
      $imagen = $request->file('imagen');

      if(!empty($imagen)):
        Storage::put($imagen->getClientOriginalName(), file_get_contents($imagen));

      $dt = Carbon::parse(Carbon::now());
      $destinationPath = public_path(). '/img/productos/';
      $imagen->move($destinationPath, $imagen->getClientOriginalName());
        endif;
    }

}
