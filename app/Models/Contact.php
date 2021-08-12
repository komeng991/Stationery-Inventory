<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contacts';
  protected $fillable = [
      'id',
      'profile_id',
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
      'person_in_charge',
      'person_in_charge_2',
      'mobile_pic2',
      'sms_alert_contact',
      'created_at',
      'updated_at',
  ];

  public $timestamps = false;
  
  }