<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPicture extends Model
{
  protected $table ='users_picture';
  public $timestamps = false;
  public function users()
  {
      return $this->hasOne('App\User','id','user_id');
  }
}
