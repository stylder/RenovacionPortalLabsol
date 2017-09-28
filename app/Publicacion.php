<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
     protected $table = "publicaciones";
    protected $fillable =['name','title','imagen','content','url','seccion','importante'];
}
