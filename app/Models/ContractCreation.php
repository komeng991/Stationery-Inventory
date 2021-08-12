<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContractCreation extends Model
{
  protected $table = 'contract_creation';
  protected $fillable = [
      'id',
      'contract_id',
      'contract_no',
      'contract_ref_1',
      'contract_ref_2',
      'contract_state',
      'contract_pbt',
      'contract_type',
      'contract_nature',
      'type_of_service',
      'description',
      'contracting_company',
      'contractor',
      'contractor_address',
      'agreement_date',
      'contract_duration',
      'validity_start',
      'validity_end',
      'created_date',
      'officer',
      'remark',
      'validity_end',
  ];

  public $timestamps = false;
  
  }