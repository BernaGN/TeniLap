<ul class="nav nav-list">
    <!--<li class="">
        <a href="{{-- route('admin.index') --}}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>-->

    <li class="">
        <a href="{{ route('clientes.index') }}">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">
                Clientes
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('pendientes.index') }}">
            <i class="menu-icon fa fa-wrench"></i>
            <span class="menu-text">
                Pendientes
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('dispositivos.index') }}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                Dispositivos
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('pagos.index') }}">
            <i class="menu-icon fa fa-money"></i>
            <span class="menu-text">
                Pagos
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('empleados.index') }}">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text">
                Empleados
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('reparados.index') }}">
            <i class="menu-icon fa fa-check"></i>
            <span class="menu-text">
                Reparados
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <li class="">
        <a href="{{ route('entregados.index') }}">
            <i class="menu-icon fa fa-ticket"></i>
            <span class="menu-text">
                Entregados
            </span>

            <b class="arrow"></b>
        </a>
    </li>

    <!--<li class="">
        <a href="{{-- route('calendario.index') --}}">
            <i class="menu-icon fa fa-calendar"></i>
            <span class="menu-text">
                Calendario
            </span>

            <b class="arrow"></b>
        </a>
    </li>-->
</ul><!-- /.nav-list -->
