<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoModelo extends Model
{
      //use Notifiable;
      protected $table = "Products";
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name','description','valor','imagen'
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */


}
