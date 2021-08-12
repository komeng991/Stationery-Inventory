<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $table = 'location';
  protected $fillable = [
      'id',
      'profile_id',
      'address_name',
      'address',
      'postal_code',
      'country',
      'state',
      'pbt',
      'district',
      'area',
      'tel_no',
      'fax_no',
      'email',
      'contact_person',
      'designation',
      'contact_number',
      'bank_no',
      'bank_name',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }