<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RolesSchemes extends Model
{


  protected $table = 'role_scheme';
  protected $fillable = [
      'id',
      'scheme_id',
      'user_id'
  ];
  
  }
