<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BlessLicenseCollection extends Model
{
  protected $table = 'bless_license_collection';
  protected $fillable = [
      'id',
      'profile_id',
      'bless_no',
      'reg_no',
      'duration',
      'duration_type',
      'start_date',
      'expiry_date',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }