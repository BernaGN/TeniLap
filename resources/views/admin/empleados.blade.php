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
                                            <td class="hidden-480">{{$empleado->password}}</td>

                                            <form action="{{route('empleados.destroy', $empleado->id)}}" method="post">
                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <a class="btn btn-xs btn-success" href="{{route('empleados.show', $empleado->id)}}">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </a>

                                                        <a class="btn btn-xs btn-info"  href="{{route('empleados.edit', $empleado->id)}}">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>
                                                        @method('DELETE')
                                                        <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Quieres eliminarlo?')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                @csrf
                                            </form>
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
    </body>
@endsection
