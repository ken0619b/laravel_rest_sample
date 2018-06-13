<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
  
  public function hashtag()
  {
    return $this->belongsTo('App\Hashtag');
  }
}
