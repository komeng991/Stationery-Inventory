<?php

namespace App\Models;
use App\Module\ConfigCleansing;
use App\Models\Pbts;

use Illuminate\Database\Eloquent\Model;

class Schemes extends Model
{
    //
    protected $table = 'scheme';
    protected $fillable = [
        'id',
        'schemeName',
        'pbtId'
    ];

    public function supervisor()
    {
        return $this->hasMany(ConfigCleansing::class,'schemeId','id');
    }

    public function pbt()
    {
        return $this->belongsTo(Pbts::class,'pbtId','id');
    }

    public function park()
    {
        return $this->hasMany(Parks::class,'parkId','id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class,'branchId','id');
    }
    public function pbts()
    {
        return $this->hasOne('App\Models\Pbts','id','pbtId')->with('states');
    }
}
