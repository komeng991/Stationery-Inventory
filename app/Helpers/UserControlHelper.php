<?php
// namespace App\Helpers;
use Illuminate\Http\Request;
//
use App\Models\Users;
use App\Models\Roles;
use App\Models\States;
use App\Models\Pbts;
use App\Models\Parks;
use App\Models\Schemes;
use App\Models\Activities;
// use Auth;

if (!function_exists('user_schemes')) {

 function user_schemes($roles,$userId){
  $user_schemes= array();
  if($roles->isAdmin || $roles->isSwcorp){
    $user_schemes = Pbts::join('state','pbt.stateId', '=', 'state.id')
            ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
            ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
            ->where(['role_scheme.user_id' =>$userId])
            ->groupBy('scheme.id')
            ->pluck('scheme.id');
  }
  elseif($roles->isAdminAf || $roles->isOpuAf){
    $user_schemes = Pbts::join('state','pbt.stateId', '=', 'state.id')
            ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
            ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
            ->where(['state.concessionId' => 1])
            ->where(['role_scheme.user_id' =>$userId])
            ->groupBy('scheme.id')
            ->pluck('scheme.id');
  }
  elseif($roles->isAdminSwm || $roles->isOpuSwm){
    $user_schemes = Pbts::join('state','pbt.stateId', '=', 'state.id')
            ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
            ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
            ->where(['state.concessionId' => 2])
            ->where(['role_scheme.user_id' => $userId])
            ->groupBy('scheme.id')
            ->pluck('scheme.id');
  }
 elseif($roles->isAdminIdaman || $roles->isOpuIdaman){
    $user_schemes = Pbts::join('state','pbt.stateId', '=', 'state.id')
            ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
            ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
            ->where(['state.concessionId' => 3])
            ->where(['role_scheme.user_id' => $userId])
            ->groupBy('scheme.id')
            ->pluck('scheme.id');
  }

  return $user_schemes;
}
}

if (!function_exists('user_pbts')) {
  function user_pbts($roles,$userId){
    $user_pbts= array();
    if($roles->isAdmin || $roles->isSwcorp){
      $user_pbts = Pbts::join('state','pbt.stateId', '=', 'state.id')
              ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
              ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
              ->where(['role_scheme.user_id' => $userId])
              ->groupBy('pbt.id','pbt.pbtName')
              ->pluck('pbt.id');
    }
    elseif($roles->isAdminAf || $roles->isOpuAf){
      $user_pbts = Pbts::join('state','pbt.stateId', '=', 'state.id')
              ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
              ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
              ->where(['state.concessionId' => 1])
              ->where(['role_scheme.user_id' => $userId])
              ->groupBy('pbt.id','pbt.pbtName')
              ->pluck('pbt.id');
    }
    elseif($roles->isAdminSwm || $roles->isOpuSwm){
      $user_pbts = Pbts::join('state','pbt.stateId', '=', 'state.id')
              ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
              ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
              ->where(['state.concessionId' => 2])
              ->where(['role_scheme.user_id' => $userId])
              ->groupBy('pbt.id','pbt.pbtName')
              ->pluck('pbt.id');
    }
   elseif($roles->isAdminIdaman || $roles->isOpuIdaman){
      $user_pbts = Pbts::join('state','pbt.stateId', '=', 'state.id')
              ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
              ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
              ->where(['state.concessionId' => 3])
              ->where(['role_scheme.user_id' => $userId])
              ->groupBy('pbt.id','pbt.pbtName')
              ->pluck('pbt.id');
    }
    return $user_pbts;
  }
}


function user_schemes_by_pbt($userId,$pbtId){
  $user_schemes = Pbts::join('state','pbt.stateId', '=', 'state.id')
          ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
          ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
          ->where(['pbt.id' => $pbtId])
          ->where(['role_scheme.user_id' => $userId])
          ->groupBy('scheme.id')
          ->pluck('scheme.id');
  return $user_schemes;
}

function user_pbts_by_state($userId,$stateId){
  $user_pbts = Pbts::join('state','pbt.stateId', '=', 'state.id')
          ->join('scheme', 'pbt.id', '=', 'scheme.pbtId')
          ->join('role_scheme', 'role_scheme.scheme_id', '=', 'scheme.id')
          ->where(['role_scheme.user_id' => $userId])
          ->where(['state.id' => $stateId])
          ->groupBy('pbt.id','pbt.pbtName')
          ->pluck('pbt.id');
  return $user_pbts;
}
