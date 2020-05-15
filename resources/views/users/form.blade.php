<div class="item form-group">
    <div class="col-form-label col-md-3 col-sm-3 label-align">
    <img src="{{Storage::url($user->avatar??'public/avatar-default.jpg')}}" class="rounded-circle" width="80" height="80" >
    </div>
    <div class="col-md-6 col-sm-6 align-self-center">
      <input type="file" id="file_avatar" name="file_avatar">
    </div>
    <div>{!!$errors->first('file_avatar', '<span class=error>:message</span>')!!}</div>
  </div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="user_name" name="user_name" value="{{old('user_name',$user->name)}}" required="required" class="form-control ">
    </div>

     <div>{!!$errors->first('user_name', '<span class=error>:message</span>')!!}</div>
  </div>
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="user_email" name="user_email" value="{{old('user_email',$user->email)}}" class="form-control ">
    </div>
    <div>{!!$errors->first('user_email', '<span class=error>:message</span>')!!}</div>
  </div>
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="password" id="user_pass" name="user_pass" value="{{old('user_pass',$user->password)}}" required="required" class="form-control ">
    </div>
    <div>{!!$errors->first('user_pass', '<span class=error>:message</span>')!!}</div>
  </div>
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Confirmar Password <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="password" id="user_confirm_pass" name="user_pass_confirmation" value="{{old('user_pass_confirmation',$user->password)}}" required="required" class="form-control ">
    </div>
    <div>{!!$errors->first('user_confirm_pass', '<span class=error>:message</span>')!!}</div>
  </div>
 <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_activo">Activo <span class="required">*</span></label>
    <div class="col-md-3 col-sm-2">
     @if($user->activo)
      <input type="checkbox" id="user_activo" name="user_activo" value="{{config('constants.condicion.activo')}}" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
      @else
      <input type="checkbox" id="user_activo" name="user_activo" value="{{config('constants.condicion.activo')}}" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
      @endif
    </div>
    <div>{!!$errors->first('user_activo', '<span class=error>:message</span>')!!}</div>
 </div>
  <div class="item form-group row justify-content-md-center pt-3">
  @foreach ($roles as $rol)
  <div class="col-md-2 col-sm-12">
  <label class="col-form-label col-md-7 col-sm-3 col-3 label-align" for="last-name">{{$rol->rol_name}}</label>
    <div class="col-md-3 col-sm-2 col-2">
      @if($user->roles->contains('rol_name', $rol->rol_name))
      <input type="checkbox" id="{{$rol->id}}" value="{{$rol->id}}" name="usuarios_roles[]" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
      @else
      <input type="checkbox" id="{{$rol->id}}" value="{{$rol->id}}" name="usuarios_roles[]" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
      @endif
    </div>
  </div>
  @endforeach
</div>
