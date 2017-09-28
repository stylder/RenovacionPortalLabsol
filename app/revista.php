<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revista extends Model
{
    protected $table = "revista";
    protected $fillable =['name','title','imagen','url'];
}
