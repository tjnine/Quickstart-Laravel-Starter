<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shower extends Model
{
    protected $fillable = ['title','name','description','image','type'];
//      protected $guarded = [];
    
}
