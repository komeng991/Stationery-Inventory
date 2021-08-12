<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BlessLicense extends Model
{
  protected $table = 'bless_license_cleansing';
  protected $fillable = [
      'id',
      'profile_id',
      'bless_no',
      'reg_no',
      'duration',
      'duration_type',
      'type_bless',
      'start_date',
      'expiry_date',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }