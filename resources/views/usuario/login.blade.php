@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" id="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Iniciar Sesion</button>
                    <a class="btn btn-secundary btn-block" href="{{route('iniciar-sesion.create')}}">Registrarse</a>
                </form>
            </div>
        </section>
    </main>
@endsection
