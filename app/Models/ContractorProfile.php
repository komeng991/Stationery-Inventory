<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContractorProfile extends Model
{
  protected $table = 'contractor_profile';
  protected $fillable = [
      'id',
      'roc_no',
      'contractor_name',
      'registration_date',
      'created_by',
      'created_date',
      'updated_by',
      'updated_date',
      'status',
      'document_uploaded',
      'pbt',
      'sap_vendor',
      'ref_no',
      'ref_no_2',
  ];

  public $timestamps = false;
  
  }