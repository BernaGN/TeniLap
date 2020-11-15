@extends('admin.layouts.plantilla')

@section('seccion')
    <body class="no-skin">
        @include('admin.layouts.menu')
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

                @include('admin.layouts.navegacion')

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>

            <div class="main-content">
                <div class="page-content">
                    <div class="page-header">
                        <h1>
                            Empleados
                        </h1>
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Categoría
                        </button>
                    </div><!-- /.page-header -->
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Contraseña</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($empleados as $empleado)
                                        <tr>
                                            <td>
                                                <a href="#">{{$empleado->nombre}}</a>
                                            </td>
                                            <td>{{$empleado->email}}</td>
                                            <td class="hidden-480"></td>

                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <button class="btn btn-xs btn-success" type="button"  data-id_empleado="{{$empleado->id}}" data-nombre="{{$empleado->nombre}}" data-email="{{$empleado->email}}" data-password="{{$empleado->password}}"  data-toggle="modal" data-target="#abrirmodalmostrar">
                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-info" type="button" data-id_empleado="{{$empleado->id}}" data-nombre="{{$empleado->nombre}}" data-email="{{$empleado->email}}" data-password="{{$empleado->password}}" data-toggle="modal" data-target="#abrirmodaleditar">
                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                    </button>

                                                    <form action="{{route('empleados.destroy', $empleado->id)}}" method="post">
                                                        @method('DELETE')
                                                        <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Quieres eliminarlo?')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                @if ($message = Session::get('mensaje'))
                                    <div class="alert alert-warning">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            </div><!-- /.span -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            @include('admin.layouts.pie')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->
        @include('admin.layouts.funcionesIndex')
        <!--Inicio del modal actualizar-->
        <div class="modal fade" id="abrirmodaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('empleados.update', 'test')}}" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_empleado" id="id_empleado" value="">
                            @include('admin.formularioEmpleados')
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <!--Inicio del modal mostrar-->
        <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('empleados.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                            @csrf
                            @include('admin.formularioEmpleados')
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <!--Inicio del modal mostrar-->
        <div class="modal fade" id="abrirmodalmostrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('admin.formularioEmpleados')
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodaleditar').on('show.bs.modal', function (event) {

               var button = $(event.relatedTarget)
               var id_modal_editar = button.data('id_empleado')
               var nombre_modal_editar = button.data('nombre')
               var email_modal_editar = button.data('email')
               var password_modal_editar = button.data('password')
               var modal = $(this)
               modal.find('.modal-body #id_empleado').val(id_modal_editar);
               modal.find('.modal-body #nombre').val(nombre_modal_editar);
               modal.find('.modal-body #email').val(email_modal_editar);
               modal.find('.modal-body #password').val(password_modal_editar);
               $(".modal-body #nombre").prop("disabled", false);
               $(".modal-body #email").prop("disabled", false);
               $(".modal-body #password").prop("disabled", false);
               $(".modal-body #guardar").prop("disabled", false);
           })
        </script>
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodalmostrar').on('show.bs.modal', function (event) {

               var button = $(event.relatedTarget)
               var id_modal_editar = button.data('id_empleado')
               var nombre_modal_editar = button.data('nombre')
               var email_modal_editar = button.data('email')
               var password_modal_editar = button.data('password')
               var modal = $(this)
               modal.find('.modal-body #id_empleado').val(id_modal_editar);
               modal.find('.modal-body #nombre').val(nombre_modal_editar);
               modal.find('.modal-body #email').val(email_modal_editar);
               modal.find('.modal-body #password').val(password_modal_editar);
               $(".modal-body #nombre").prop("disabled", true);
               $(".modal-body #email").prop("disabled", true);
               $(".modal-body #password").prop("disabled", true);
               $(".modal-body #guardar").prop("disabled", true);
           })
        </script>
    </body>
@endsection
