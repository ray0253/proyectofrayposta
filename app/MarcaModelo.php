<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaModelo extends Model
{
      //use Notifiable;
      protected $table = "Brands";
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name'
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */


}
