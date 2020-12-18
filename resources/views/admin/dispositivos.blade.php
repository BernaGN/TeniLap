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
                            {{ $nombre }}
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="col-xs-12">
                        @if ($nombre != 'Pendientes')
                            <button class="btn btn-primary btn-lg" type="button" data-toggle="modal"
                                data-target="#abrirmodal">
                                <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Dispositivos
                            </button><br><br>
                        @endif
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Dispositivo</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Entrega</th>
                                            <th>Estado</th>
                                            <th>Total</th>
                                            <th>Cliente</th>
                                            <th>Empleado</th>
                                            @if ($nombre != 'Pendientes')
                                                <th></th>
                                            @endif
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($dispositivos as $dispositivo)
                                            <tr>
                                                <td>{{ $dispositivo->tipo }} {{ $dispositivo->marca }}</td>
                                                <td class="hidden-480">{{ $dispositivo->fecha_inicio }}</td>
                                                <td class="hidden-480">{{ $dispositivo->fecha_entrega }}</td>
                                                <td class="hidden-480">{{ $dispositivo->estado }}</td>
                                                <td class="hidden-480">${{ $dispositivo->total }}</td>
                                                <td class="hidden-480">{{ $dispositivo->cliente }}</td>
                                                <td class="hidden-480">{{ $dispositivo->empleado }}</td>

                                                @if ($nombre != 'Pendientes')
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <form
                                                                action="{{ route('dispositivos.destroy', $dispositivo->id) }}"
                                                                method="post">
                                                                <button class="btn btn-xs btn-success" type="button"
                                                                    data-id_dispositivo="{{ $dispositivo->id }}"
                                                                    data-tipo="{{ $dispositivo->tipo }}"
                                                                    data-marca="{{ $dispositivo->marca }}"
                                                                    data-fecha_inicio="{{ $dispositivo->fecha_inicio }}"
                                                                    data-fecha_entrega="{{ $dispositivo->fecha_entrega }}"
                                                                    data-estado="{{ $dispositivo->estado }}"
                                                                    data-total="{{ $dispositivo->total }}"
                                                                    data-cliente="{{ $dispositivo->cliente }}"
                                                                    data-empleado="{{ $dispositivo->empleado }}"
                                                                    data-toggle="modal" data-target="#abrirmodalmostrar">
                                                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                                                </button>

                                                                <button class="btn btn-xs btn-info" type="button"
                                                                    data-id_dispositivo="{{ $dispositivo->id }}"
                                                                    data-tipo="{{ $dispositivo->tipo }}"
                                                                    data-marca="{{ $dispositivo->marca }}"
                                                                    data-fecha_inicio="{{ $dispositivo->fecha_inicio }}"
                                                                    data-fecha_entrega="{{ $dispositivo->fecha_entrega }}"
                                                                    data-estado="{{ $dispositivo->estado }}"
                                                                    data-total="{{ $dispositivo->total }}"
                                                                    data-cliente="{{ $dispositivo->cliente }}"
                                                                    data-empleado="{{ $dispositivo->empleado }}"
                                                                    data-toggle="modal" data-target="#abrirmodaleditar">
                                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                </button>

                                                                @method('DELETE')
                                                                <button class="btn btn-xs btn-danger" type="submit"
                                                                    onclick="return confirm('Quieres eliminarlo?')">
                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </button>
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </td>
                                                @endif
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
                        <form action="{{ route('dispositivos.update', 'test') }}" method="post"
                            enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_dispositivo" id="id_dispositivo" value="">
                            @include('admin.formularioDispositivos')
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <!--Inicio del modal mostrar-->
        <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('dispositivos.store') }}" method="post" enctype="multipart/form-data"
                            class="form-horizontal" autocomplete="off">
                            @csrf
                            @include('admin.formularioDispositivosAgregar')
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
                        @include('admin.formularioDispositivos')
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

                $(".modal-body #tipo").prop("disabled", false);
                $(".modal-body #marca").prop("disabled", false);
                $(".modal-body #fecha_inicio").prop("disabled", false);
                $(".modal-body #fecha_entrega").prop("disabled", false);
                $(".modal-body #estado").prop("disabled", false);
                $(".modal-body #total").prop("disabled", false);
                $(".modal-body #cliente").prop("disabled", false);
                $(".modal-body #empleado").prop("disabled", false);
                $(".modal-body #guardar").prop("disabled", false);
            })

        </script>
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodaleditar').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget)
                var id_modal_editar = button.data('id_dispositivo')
                var marca_modal_editar = button.data('marca')
                var fecha_inicio_modal_editar = button.data('fecha_inicio')
                var fecha_entrega_modal_editar = button.data('fecha_entrega')
                var estado_modal_editar = button.data('estado')
                var total_modal_editar = button.data('total')
                var modal = $(this)
                modal.find('.modal-body #id_dispositivo').val(id_modal_editar);
                modal.find('.modal-body #marca').val(marca_modal_editar);
                modal.find('.modal-body #fecha_inicio').val(fecha_inicio_modal_editar);
                modal.find('.modal-body #fecha_entrega').val(fecha_entrega_modal_editar);
                modal.find('.modal-body #estado').val(estado_modal_editar);
                modal.find('.modal-body #total').val(total_modal_editar);
                $(".modal-body #tipo").prop("disabled", false);
                $(".modal-body #marca").prop("disabled", false);
                $(".modal-body #fecha_inicio").prop("disabled", false);
                $(".modal-body #fecha_entrega").prop("disabled", false);
                $(".modal-body #estado").prop("disabled", false);
                $(".modal-body #total").prop("disabled", false);
                $(".modal-body #cliente").prop("disabled", false);
                $(".modal-body #empleado").prop("disabled", false);
                $(".modal-body #guardar").prop("disabled", false);
            })

        </script>
        <script type="text/javascript">
            /*EDITAR CATEGORIA EN VENTANA MODAL*/
            $('#abrirmodalmostrar').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget)
                var id_modal_editar = button.data('id_dispositivo')
                var marca_modal_editar = button.data('marca')
                var fecha_inicio_modal_editar = button.data('fecha_inicio')
                var fecha_entrega_modal_editar = button.data('fecha_entrega')
                var estado_modal_editar = button.data('estado')
                var total_modal_editar = button.data('total')
                var modal = $(this)
                modal.find('.modal-body #id_dispositivo').val(id_modal_editar);
                modal.find('.modal-body #marca').val(marca_modal_editar);
                modal.find('.modal-body #fecha_inicio').val(fecha_inicio_modal_editar);
                modal.find('.modal-body #fecha_entrega').val(fecha_entrega_modal_editar);
                modal.find('.modal-body #estado').val(estado_modal_editar);
                modal.find('.modal-body #total').val(total_modal_editar);
                $(".modal-body #tipo").prop("disabled", true);
                $(".modal-body #marca").prop("disabled", true);
                $(".modal-body #fecha_inicio").prop("disabled", true);
                $(".modal-body #fecha_entrega").prop("disabled", true);
                $(".modal-body #estado").prop("disabled", true);
                $(".modal-body #total").prop("disabled", true);
                $(".modal-body #cliente").prop("disabled", true);
                $(".modal-body #empleado").prop("disabled", true);
                $(".modal-body #guardar").prop("disabled", true);
            })

        </script>
    </body>
@endsection
