<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CleaningDetail extends Model
{
  protected $table = 'cleansing_license_details';
  protected $fillable = [
      'id',
      'cleansing_id',
      'type_service',
      'state',
      'zon',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }