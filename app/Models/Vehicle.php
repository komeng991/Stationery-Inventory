<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  protected $table = 'vehicle';
  protected $fillable = [
      'id',
      'profile_id',
      'vehicle_id',
      'registration_no',
      'ownership',
      'type',
      'bdm',
      'btm',
      'manufacturing_year',
      'registration_year',
      'compactor',
      'gps',
      'bin_lifter',
      'truck_paint',
      'registration_card',
      'created_by',
      'updated_by',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }