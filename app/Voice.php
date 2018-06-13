<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
  protected $fillable = ['tag_id', 'type', 'content', 'path'];

  public function hashtag()
  {
    return $this->belongsTo('App\Hashtag');
  }
}
