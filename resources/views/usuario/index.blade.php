@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page landing-page" style="padding: 0;">
        <section class="clean-block features"
            style="padding: 95px 0;padding-bottom: 10px;background: rgba(9, 162, 255, 1);">
            <div class="carousel slide" data-ride="carousel" id="carousel-1" style="width: 100%;margin: 0;">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-nature carousel-hero">
                            <h1 class="hero-title">Reparacion de computadoras</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-photography carousel-hero">
                            <h1 class="hero-title">Venta de componentes</h1>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="jumbotron pulse animated hero-technology carousel-hero">
                            <h1 class="hero-title">Limpieza de equipos</h1>
                        </div>
                    </div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                            class="fa fa-chevron-left"></i><span class="sr-only">Anterior</span></a><a
                        class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                            class="fa fa-chevron-right"></i><span class="sr-only">Siguiente</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                </ol>
            </div>
            <div class="row justify-content-center" style="margin: 0;margin-top: 10px;">
                <form action="{{ route('informacion.index') }}" method="get" class="col-12">
                    <div class="row justify-content-center" style="margin-bottom: 5px;">
                        <div class="col-8 align-self-center"><input name="buscarTexto" class="form-control-lg" type="text"
                                style="width: 100%;border-style: none;border-color: rgb(0,0,0,.5);" placeholder="Número ID"
                                required pattern="\d{1,5}"></div>
                        <div class="col-4"><button class="btn btn-secondary btn-lg" type="submit"
                                style="width: 100%;">Consultar</button></div>
                    </div>
                </form>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading" style="border-bottom-style: none;">
                    <h2 class="text-info">Recomendaciones</h2>
                    <p>Las recomendaciones son para...</p>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>MAXIMIZA LA VIDA ÚTIL DE TU TELÉFONO</h3>
                        <p class="text-center">
                            mantener la batería entre el 20 y el 80% de carga es beneficioso para su vida útil. Cuando la
                            carga suba del 80% estarás forzando y degradando las celdas de iones de la batería, lo que se
                            traduce en que su salud se resiente y la autonomía baja con el tiempo. Lo mismo pasa cuando la
                            batería baja del 20%, que la estaremos forzando. Por lo tanto, al mantenerla en estos límites lo
                            que vas a lograr es no someter a tanto estrés a las baterías y prolongar su vida útil.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
