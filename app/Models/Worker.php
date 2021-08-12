<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
  protected $table = 'worker';
  protected $fillable = [
      'id',
      'profile_id',
      'employee_id',
      'location',
      'salutation',
      'full_name',
      'ic',
      'local_foreign',
      'designation',
      'remark',
      'email',
      'gender',
      'contact_number',
      'created_by',
      'updated_by',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }