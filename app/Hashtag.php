<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
  
  public function voices()
  {
    return $this->hasMany('App\Voice');
  }
}
