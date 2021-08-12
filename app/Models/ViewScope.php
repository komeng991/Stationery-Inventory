<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ViewScope extends Model
{
  protected $table = 'view_scope';
  protected $fillable = [
      'id',
      'schemeId',
      'contract_id',
      'area_code',
      'area',
      'street_code',
      'street',
      'item',
      'qty',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }