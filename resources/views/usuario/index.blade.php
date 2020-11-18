@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page landing-page" style="padding: 0;">
        <section class="clean-block features" style="padding: 95px 0;padding-bottom: 10px;background: rgba(9, 162, 255, 1);">
            <div class="carousel slide" data-ride="carousel" id="carousel-1" style="width: 100%;margin: 0;">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-nature carousel-hero">
                            <h1 class="hero-title">Hero Nature</h1>
                            <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                            <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-photography carousel-hero">
                            <h1 class="hero-title">Hero Photography</h1>
                            <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                            <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="jumbotron pulse animated hero-technology carousel-hero">
                            <h1 class="hero-title">Hero Technology</h1>
                            <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                            <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                <ol
                    class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                    </ol>
            </div>
            <div class="row justify-content-center" style="margin: 0;margin-top: 10px;">
                <div class="col-8"><input class="form-control-lg" type="text" style="width: 100%;border-style: none;border-color: rgb(0,0,0,.5);" placeholder="Número ID"></div>
                <div class="col-4"><button class="btn btn-secondary btn-lg" type="button" style="width: 100%;">Consultar</button></div>
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
                        <p class="text-center">Aquí pon tu recomendación</p>
                    </div>
                    <div class="col">
                        <p class="text-center">Aquí pon tu&nbsp;recomendación<br></p>
                    </div>
                    <div class="col">
                        <p class="text-center">Aquí pon tu recomendación</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
