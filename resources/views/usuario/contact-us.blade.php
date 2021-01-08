@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contactanos</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.0645228298495!2d-101.52561421457678!3d20.089589480052773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c51d5e9d06ad5%3A0x26943f677e0086f0!2sAbasolo%2096%2C%20Centro%2C%2058507%20Puru%C3%A1ndiro%2C%20Mich.!5e0!3m2!1ses!2smx!4v1610082144614!5m2!1ses!2smx"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <form style="padding: 20px 40px;">
                    <div class="form-group" style="margin: 0;">
                        <ul class="list-unstyled fa-ul">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                                    fill="currentColor" class="bi bi-telephone-fill fa-li text-primary">
                                    <path fill-rule="evenodd"
                                        d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z">
                                    </path>
                                </svg><a href="#">Número de teléfono</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" class="fa-li text-primary">
                                    <path
                                        d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"
                                        fill="currentColor"></path>
                                </svg><a href="#">Página de facebook</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" class="fa-li text-primary">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"
                                        fill="currentColor"></path>
                                </svg><a href="#">Correo electrónico</a></li>
                            <li><i class="fa fa-location-arrow fa-li text-primary"></i><a href="#">Tu ubicación</a></li>
                        </ul>
                    </div>
                </form>
                <form method="POST" action="{{ route('contacto.store') }}">
                    @csrf()
                    <div class="form-group"><label>Nombre</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Asunto</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Correo</label><input class="form-control" type="email"></div>
                    <div class="form-group"><label>Mensaje</label><textarea class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>
    </main>
@endsection
