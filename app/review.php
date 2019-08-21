<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
  public $table ='reviews';
   public $fillable = ['email','name',
    'message'];

}
