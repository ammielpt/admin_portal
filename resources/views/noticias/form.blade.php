<div class="item form-group row mb-3">
        <label class="col-form-label col-2 col-md-1 label-align" for="first-name">Titulo <span class="required">*</span>
        </label>
        <div class="col-10 col-md-9">
          <input type="text" id="first-name" required="required" class="form-control ">
        </div>
</div>    
<div class="item form-group row mb-3">
  <label class="col-form-label col-2 col-md-1 label-align" for="first-name">Categoría <span class="required">*</span>
  </label>
  <div class="col-10 col-md-4 ">
    <select class="form-control selectpicker" required="required" title="Seleccionar tags" data-live-search="true" multiple>
      @foreach ($categorias as $categoria)
      <option>{{$categoria->categoria_nombre}}</option>
      @endforeach
    </select>
  </div>
  <label for="middle-name" class="col-form-label col-2 col-md-1 label-align">Fecha</label>
  <div class="col-10 col-md-4">
    <div class="control-group">                          
      <div class="controls">
        <div class="xdisplay_inputx form-group row has-feedback">
          <input type="text" class="form-control has-feedback-left" id="single_cal1" aria-describedby="inputSuccess2Status">
          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
          <span id="inputSuccess2Status" class="sr-only">(success)</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="item form-group mb-3">
  <label class="col-form-label col-2 col-md-1 label-align">Imagen <span class="required">*</span>
  </label>
  <div class="col-10 col-md-9">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="inputGroupFile02">
      <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elegir archivo</label>
    </div>
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-2 col-md-1 label-align" for="last-name">Descripcion <span class="required">*</span>
  </label>
  <div class="col-10 col-md-9">
    <textarea id="last-name" name="last-name" rows="8" required="required" class="form-control"></textarea>
  </div>
</div>