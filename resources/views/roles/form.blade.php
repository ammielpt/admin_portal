<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="rol_nombre" name="rol_nombre" value="{{old('rol_nombre',$rol->rol_name)}}" required="required" class="form-control ">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre Clave<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="rol_nombre_clave" name="rol_nombre_clave" value="{{old('rol_nombre_clave',$rol->rol_key_name)}}" required="required" class="form-control ">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <textarea id="rol_description" name="rol_description" rows="8" required="required" class="form-control">{{old('rol_description',$rol->rol_description)}}</textarea>
  </div>
</div>