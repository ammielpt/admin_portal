<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="categoria_nombre" name="categoria_nombre" value="{{old('categoria_nombre',$categoria->categoria_nombre)}}" required="required" class="form-control ">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <textarea id="categoria_descripcion" name="categoria_descripcion" rows="8" required="required" class="form-control">
    {{old('categoria_descripcion',$categoria->categoria_descripcion)}}
    </textarea>
  </div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Activo <span class="required">*</span></label>
  <div class="col-md-6 col-sm-6 ">
    @if($categoria->categoria_activo)
    <input type="checkbox" id="categoria_activo" checked value="{{config('constants.condicion.activo')}}" name="categoria_activo" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
    @else
    <input type="checkbox" id="categoria_activo" value="{{config('constants.condicion.activo')}}" name="categoria_activo" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
    @endif
  </div>
</div>