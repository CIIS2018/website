<div class="container-fluid bg-white fixed-top ">
    <div class="container bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="{{ route('frontend.index') }}">
                <img src="/images/icono-web-CIIS.png" class="d-inline-block align-top nav--logo" alt="icono-del-ciis">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link menu__item" href="{{ route('frontend.index') }}">INICIO</a>
                    </li>
                    {{--<li class="nav-item">
                        <a class="nav-link menu__item" href="{{ route('frontend.postmaster') }}">POSTMASTER</a>
                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#ponentes') }}">PONENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#talleres') }}">TALLERES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#concursos_ciis') }}">CONCURSOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#feria') }}">FERIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#precios') }}">PRECIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#turismo') }}">TURISMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu__item" data-scroll href="{{ url('http://www.ciistacna.com/index.php#pasos') }}">¿CÓMO INSCRIBIRME?</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>