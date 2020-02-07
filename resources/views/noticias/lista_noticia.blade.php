@extends('layout')
@section('dependantshead')
<!-- Bootstrap -->
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <!-- NProgress -->
    <link href="{{asset('css/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
    <link href="{{asset('css/icheck-flat-green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/buttons.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/fixedHeader.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/responsive.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/scroller.bootstrap.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
    <link href="{{asset('css/gentelella-custom.css')}}" rel="stylesheet">    
@endsection
@section('content')
<!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h4>Noticias</h4>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <a href="{{route('noticia.nuevo')}}" class="btn btn-primary"><span class="fa fa-plus-circle text-white"></span><span class="text-white ml-1">Nuevo</span></a>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>Codigo</th>
                              <th>Foto</th>
                              <th>Titulo</th>
                              <th>Descripcion</th>                              
                              <th>Fecha Registro</th>
                              <th>Usuario Registro</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                              <td>
                                <a class="btn btn-warning" href="{{route('noticia.editar')}}">Editar</a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" href="#">Eliminar</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Esta seguro que desea eliminar el registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success pl-4 pr-4">Si</button>
      </div>
    </div>
  </div>
</div>
      @endsection
      @section('dependantsfooter')
      <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
    $(document).ready(function(){
      $("#delete-news").click(function(){
        alert("Eliminar el registro?");
      });
    });
    </script> 
  <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- FastClick -->
    <script src="{{asset('js/fastclick.js')}}"></script>
  <!-- NProgress -->
    <script src="{{asset('js/nprogress.js')}}"></script>
  <!-- iCheck -->
    <script src="{{asset('js/icheck.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
  <script src="{{asset('js/dataTables.buttons.js')}}"></script>
  <script src="{{asset('js/buttons.bootstrap.js')}}"></script>
  <script src="{{asset('js/buttons.flash.js')}}"></script>
  <script src="{{asset('js/buttons.html5.js')}}"></script>
  <script src="{{asset('js/buttons.print.js')}}"></script>
  <script src="{{asset('js/dataTables.fixedHeader.js')}}"></script>
  <script src="{{asset('js/dataTables.keyTable.js')}}"></script>
  <script src="{{asset('js/dataTables.responsive.js')}}"></script>
  <script src="{{asset('js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('js/dataTables.scroller.js')}}"></script>
  <script src="{{asset('js/jszip.min.js')}}"></script>
  <script src="{{asset('js/pdfmake.min.js')}}"></script>
  <script src="{{asset('js/vfs_fonts.js')}}"></script>
      <!-- Custom Theme Scripts -->
    <script src="{{asset('js/gentelella-custom.js')}}"></script>        
@endsection