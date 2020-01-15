    @extends('layout')
    @section('dependantshead')
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('css/icheck-flat-green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('css/bootstrap-daterangepicker.css')}}" rel="stylesheet">
     <!-- bootstrap-datetimepicker -->
    <link href="{{asset('css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('css/gentelella-custom.css')}}" rel="stylesheet">
    @endsection
    @section('content')
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Nuevo</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Titulo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>    
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Categoría <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" required="required">
                            <option>Elige una opción</option>
                            <option>Feria</option>
                            <option>Tecnologia</option>
                            <option>Deporte</option>
                            <option>Gastronomia</option>
                          </select>
                        </div>
                      </div>                     
                      <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Fecha</label>
                      <div class="col-md-6 col-sm-6">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Imagen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elegir archivo</label>
                          </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea id="last-name" name="last-name" rows="8" required="required" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <a href="{{route('noticias')}}" class="btn btn-danger" type="button">Cancelar</a>
						  <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection
@section('dependantsfooter')
         <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{asset('js/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('js/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('js/icheck.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/bootstrap-daterangepicker.js')}}"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- validator -->
    <script src="{{asset('js/validator.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/gentelella-custom.js')}}"></script> 
    <script>
       // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
</script>
    @endsection