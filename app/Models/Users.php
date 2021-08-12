<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model{

  public function roles(){
          return $this->belongsToMany('App\Models\Roles','role_user','user_id', 'role_id');
  }
  public function hasAnyRole($roles)
  {
    return null !== $this->roles()->whereIn("name", $roles)->first();
  }
  public function hasRole($role)
  {
    return null !== $this->roles()->where("name", $role)->first();
  }
}
