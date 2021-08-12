<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

  protected $table = 'role_user';

  public function user(){
            return $this->hasOne('App\Models\Users','id', 'user_id');
  }

    }
