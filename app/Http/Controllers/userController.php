<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class userController extends Controller
{
  public function profile()
  {
      return view('profile',array('user' => Auth::user() ));
  }

  public function deslogear()
  {   Auth::logout();
      return view('welcome');
  }


}
