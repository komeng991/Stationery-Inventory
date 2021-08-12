<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RolesUsers extends Model
{


  protected $table = 'roles';
  protected $fillable = [
      'id',
      'name',
      'description'
  ];
    }
