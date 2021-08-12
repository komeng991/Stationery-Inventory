@extends('layouts.dashboard')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('users.edit.index')

@section('form')

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT','enctype'=>'multipart/form-data','class' =>'')) }}
      @if (Session::has('message'))
          <div class="alert adjusted alert-info fade in">
            <button class="close" data-dismiss="alert">×</button>
            {{ Session::get('message') }}
          </div>
      @endif
      @if ($errors->all() )
      <div class="alert adjusted alert-warning fade in">
        <button class="close" data-dismiss="alert">
          ×
        </button>
        {{ Html::ul( $errors->all()) }}
      </div>
      @endif
      <div class="row">

      <div class="col-lg-6">
        <div class="p-20">
          <div class="form-group">
                <label class="form-label">Nama Penuh</label>
                <input class="form-control" id="name" required type="text" value="{{$user->name}}" name="name">
          </div>
          <div class="form-group">
                <label class="form-label">Alamat emel</label>
                <input class="form-control" type="text" id="email" name="email" value="{{$user->email}}" disabled>
          </div>
          <div class="form-group">
                <label class="form-label">Kata Laluan</label>
                <input class="form-control" id="password"  type="password" name="password" placeholder="Password" id="password">
                <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
          <div class="p-20">
            <div class="form-group">
                  <label class="form-label">No Pekerja</label>
                  <input class="form-control" id="staff_id" name="staff_id" required type="text" value="{{$user->staff_id}}">
            </div>
            <div class="form-group">
                  <label class="form-label">No Telefon</label>
                  <input class="form-control" required id="hp_no" name="hp_no" type="text" value="{{$user->hp_no}}" />
            </div>
            <div class="form-group">
                  <label class="form-label">Sahkan Kata Laluan</label>
                  <input class="form-control" id="password-confirm"   type="password" name="password_confirmation" placeholder="Confirm password">
                  <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
            </div>
          </div>
      </div>
      <section class="col-lg-12 p-2">
        <div class="panel-tag">
            Assign Roles
        </div>
      </section>

      <section class="col-lg-12">
        <div class="form-group">
        <label class="form-label">Roles</label>
        @if($isAdmin)
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisAdmin"   name="isAdmin" {{ in_array("isAdmin", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisAdmin">Super Administrator</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisSwcorp"  name="isSwcorp" {{ in_array("isSwcorp", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisSwcorp">SWCorp Administrator</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisAdminSwm"  name="isAdminSwm" {{ in_array("isAdminSwm", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisAdminSwm">Admin SWM</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisAdminAf"  name="isAdminAf" {{ in_array("isAdminAf", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisAdminAf">Admin Alam Flora</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisAdminIdaman"  name="isAdminIdaman" {{ in_array("isAdminIdaman", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisAdminIdaman">Admin Idaman</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisOpuSwm"  name="isOpuSwm" {{ in_array("isOpuSwm", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisOpuSwm">Operation SWM</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisOpuAf"  name="isOpuAf" {{ in_array("isOpuAf", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisOpuAf">Operation  Alam Flora</label>
          </div>
          <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchisOpuIdaman"  name="isOpuIdaman" {{ in_array("isOpuIdaman", $arrRoles) ? 'checked="checked"' : '' }}>
              <label class="custom-control-label" for="customSwitchisOpuIdaman">Operation  Idaman</label>
          </div>
        @endif
        @if($isSwcorp)
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisSwcorp"  name="isSwcorp" {{ in_array("isSwcorp", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisSwcorp">SWCorp Administrator</label>
        </div>
        @endif
        @if($isAdminSwm)
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisAdminSwm"  name="isAdminSwm" {{ in_array("isAdminSwm", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisAdminSwm">Admin SWM</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisOpuSwm"  name="isOpuSwm" {{ in_array("isOpuSwm", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisOpuSwm">Operation SWM</label>
        </div>
        @endif
        @if($isAdminAf)
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisAdminAf"  name="isAdminAf" {{ in_array("isAdminAf", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisAdminAf">Admin Alam Flora</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisOpuAf"  name="isOpuAf" {{ in_array("isOpuAf", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisOpuAf">Operation  Alam Flora</label>
        </div>
        @endif
        @if($isAdminIdaman)
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisAdminIdaman"  name="isAdminIdaman" {{ in_array("isAdminIdaman", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisAdminIdaman">Admin Idaman</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitchisOpuIdaman"  name="isOpuIdaman" {{ in_array("isOpuIdaman", $arrRoles) ? 'checked="checked"' : '' }}>
            <label class="custom-control-label" for="customSwitchisOpuIdaman">Operation  Idaman</label>
        </div>
        @endif
      </div>
    </section>

    <section class="col col-6 p-2">

       <div class="form-group">
          <label class="form-label">Verification (Approve User)</label>
          {{ Form::select('verified',
             array(null => 'Verification', 1 => 'Approve', 0 => 'Reject'
             ), null, array('class' => 'form-control')) }}
       </div>



    </section>
    <section class="col col-12 p-2">
      <label class="form-label" for="multiple-basic">
           Skim
       </label>
       <select class="select2 form-control" multiple="multiple" id="roles_schemes_user" name="roles_schemes_user[]">
         @foreach($schemes as $scheme)
           @if(in_array($scheme->id,$roles_schemes_user->toArray()))
            <option selected value="{{$scheme->id}}">{{$scheme->schemeName}}</option>
           @else
            <option value="{{$scheme->id}}">{{$scheme->schemeName}}</option>
           @endif
         @endforeach
         </select>
    </section>



      <div class="col-lg-12">
      <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center ml-lg-4 ">

          <button class="btn btn-primary ml-auto" type="submit">Submit</button>
      </div>
    </div>
    </div>



<!-- </form> -->
<input type="hidden" name="user_id" value="{{$user->id}}" />
{{ Form::close() }}

@stop
@section('css')

<link rel="stylesheet" media="screen, print" href="{{url('css/formplugins/select2/select2.bundle.css')}}">
@stop
@section('js')
<script src="{{url('js/formplugins/select2/select2.bundle.js')}}"></script>
<script>
 $('.select2').select2({
      columns: 3,
      placeholder: 'Select',
      search: true,
      selectAll: true,
      allowClear: true,
  });

</script>


@stop
