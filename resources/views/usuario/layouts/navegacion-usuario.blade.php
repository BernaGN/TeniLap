<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Tecni App</a><button data-toggle="collapse"
            class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('inicio.index') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('acerca-de.index') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacto.index') }}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
