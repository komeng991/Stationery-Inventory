<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{


public function users()
  {
     return $this->belongsToMany('App\Models\Users','users');
    }

public function userslist()
{
    return $this->hasMany('App\Models\RoleUser','role_id', 'id')->with('user');
    }

    }
