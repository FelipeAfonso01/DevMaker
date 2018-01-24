<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
  protected $table = 'stories';
  protected $fillable = array('title','description','user_id');

  public function users(){
    return $this->belongsTo('App\User');
  }
}
