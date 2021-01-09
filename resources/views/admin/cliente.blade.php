@extends('admin.layouts.plantilla')

@section('seccion')

    <body class="no-skin">
        @include('admin.layouts.menu')
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {}

            </script>

            <div id="sidebar" class="sidebar responsive">
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {}

                </script>

                @include('admin.layouts.navegacion')

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
                        data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {}

                </script>
            </div>

            <div class="main-content">
                <div class="page-content">
                    <div class="page-header">
                        <h1>
                            Clientes
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Cliente
                        </button><br><br>
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Status</th>
                                            <th>Localidad</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($clientes as $cliente)
                                            <tr>
                                                <td>
                                                    <a href="#">{{ $cliente->nombre }}</a>
                                                </td>
                                                <td>{{ $cliente->email }}</td>
                                                <td class="hidden-480">{{ $cliente->telefono }}</td>
                                                <td>{{ $cliente->estado }}</td>
                                                <td>{{ $cliente->localidad }}</td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                            method="post">
                                                            <button class="btn btn-xs btn-success" type="button"
                                                                data-id_cliente="{{ $cliente->id }}"
                                                                data-nombre="{{ $cliente->nombre }}"
                                                                data-email="{{ $cliente->email }}"
                                                                data-telefono="{{ $cliente->telefono }}"
                                                                data-status="{{ $cliente->estado }}" data-toggle="modal"
                                                                data-target="#abrirmodalmostrar">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>

                                                            <button class="btn btn-xs btn-info" type="button"
                                                                data-id_cliente="{{ $cliente->id }}"
                                                                data-nombre="{{ $cliente->nombre }}"
                                                                data-email="{{ $cliente->email }}"
                                                                data-telefono="{{ $cliente->telefono }}"
                                                                data-status="{{ $cliente->estado }}" data-toggle="modal"
                                                                data-target="#abrirmodaleditar">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>

                                                            @method('DELETE')
                                                            <!--<button class="btn btn-xs btn-danger" type="submit"
                                                                    onclick="return confirm('Quieres eliminarlo?')">
                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </button>-->
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
        <!--Inicio del modal mostrar-->
        <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Cliente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data"
                            class="form-horizontal" autocomplete="off">
                            @csrf
                            @include('admin.formularioClientesAgregar')
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->

        <!--Inicio del modal actualizar-->
        <div class="modal fade" id="abrirmodaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('clientes.update', 'test') }}" method="post" enctype="multipart/form-data"
                            class="form-horizontal" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_cliente" id="id_cliente" value="">
                            @include('admin.formularioClientes')
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->

        <!--Inicio del modal mostrar-->
        <div class="modal fade" id="abrirmodalmostrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ver Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('admin.formularioClientes')
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodal').on('show.bs.modal', function(event) {

                $(".modal-body #nombre").prop("disabled", false);
                $(".modal-body #email").prop("disabled", false);
                $(".modal-body #guardar").prop("disabled", false);
                $(".modal-body #telefono").prop("disabled", false);
                $(".modal-body #status").prop("disabled", false);
                $(".modal-body #localidad").attr("readonly", false);
            })

        </script>
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodaleditar').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget)
                var id_modal_editar = button.data('id_cliente')
                var nombre_modal_editar = button.data('nombre')
                var email_modal_editar = button.data('email')
                var telefono_modal_editar = button.data('telefono')
                var status_modal_editar = button.data('status')
                var modal = $(this)
                modal.find('.modal-body #id_cliente').val(id_modal_editar);
                modal.find('.modal-body #nombre').val(nombre_modal_editar);
                modal.find('.modal-body #email').val(email_modal_editar);
                modal.find('.modal-body #telefono').val(telefono_modal_editar);
                modal.find('.modal-body #status').val(status_modal_editar);
                $(".modal-body #nombre").prop("disabled", false);
                $(".modal-body #email").prop("disabled", false);
                $(".modal-body #guardar").prop("disabled", false);
                $(".modal-body #telefono").prop("disabled", false);
                $(".modal-body #status").prop("disabled", false);
                $(".modal-body #localidad").attr("disabled", false);
            })

        </script>
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodalmostrar').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget)
                var id_modal_editar = button.data('id_cliente')
                var nombre_modal_editar = button.data('nombre')
                var email_modal_editar = button.data('email')
                var telefono_modal_editar = button.data('telefono')
                var status_modal_editar = button.data('status')
                var modal = $(this)
                modal.find('.modal-body #id_empleado').val(id_modal_editar);
                modal.find('.modal-body #nombre').val(nombre_modal_editar);
                modal.find('.modal-body #email').val(email_modal_editar);
                modal.find('.modal-body #telefono').val(telefono_modal_editar);
                modal.find('.modal-body #status').val(status_modal_editar);
                $(".modal-body #nombre").prop("disabled", true);
                $(".modal-body #email").prop("disabled", true);
                $(".modal-body #guardar").prop("disabled", true);
                $(".modal-body #telefono").prop("disabled", true);
                $(".modal-body #status").prop("disabled", true);
                $(".modal-body #localidad").prop("disabled", true);
            })

        </script>
    </body>
@endsection
