<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CollectionDetails extends Model
{
  protected $table = 'collection_license_details';
  protected $fillable = [
      'id',
      'collection_id',
      'category',
      'type',
      'state',
      'scheme',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }