@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Dispositivo</h2>
                    <p>Aqui puedes ver la informacion del dispositivo como el estado en el que se encuentra.</p>
                </div>
                <div class="row">
                    @foreach($dispositivo as $dis)
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Id: </strong>
                            {{$dis->id}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            {{$dis->nombre}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Dispositivo: </strong>
                            {{$dis->tipo}} {{$dis->marca}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de Inicio: </strong>
                            {{$dis->fecha_inicio}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de Entrega: </strong>
                            {{$dis->fecha_entrega}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Estado: </strong>
                            {{$dis->estado}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total: </strong>
                            {{$dis->total}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cliente: </strong>
                            {{$dis->cliente}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Empleado: </strong>
                            {{$dis->empleado}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
