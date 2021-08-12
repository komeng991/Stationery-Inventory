<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  protected $table = 'owner';
  protected $fillable = [
      'id',
      'profile_id',
      'full_name',
      'ic_no',
      'designation',
      'contact_no',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }