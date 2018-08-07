@extends('frontend.layouts.app')

@section('title','XIX Congreso Internacional de Informática y Sistemas 2018' )

@section('content')
    
    @include('frontend.includes.header')
    <!--TERMINOS EL HEADER-->
    <!--COMIENSO DE INFORMACION-->
    
    <!-- Card Regular -->
    @include('frontend.presenter.presenters')
    
    <!-- Lineas tematicas -->
    @include('frontend.subject.subjects')
    <!--fin de concursos-->
    <!-- fin de lineas tematicas -->
    <!---talleres-->
    
    @include('frontend.workshop.workshops')
    <!---fin de talleres-->
    <!---concursos-->
    @include('frontend.competition.competitions')
    <!--fin de concursos-->
    
    <!-- iNICIO DE FERIA -->
    <section class="container-fluid" id="feria">
        <div class="container">
            <h2 class="text-primary text-center
                 pb-3">
                Conoce la feria tecnológica
            </h2>
            <div class="row seccion">
                <!-- <h2 class="seccion__titulo text-center"><span class="titulo--blue">Conoce</span> un poco más de la <span class="titulo--blue">feria tecnologica</span></h2> -->
                
                <div class="col-sm-12 col-md-6 d-flex align-items-center">
                    <img class="img-fluid" src="images/feria-mapa.jpeg">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/aS5bgHWPZdM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    
                    </div> -->
                
                </div>
                <article class="col-sm-12 col-md-6">
                    
                    <p>La feria se desarrollará del 14 al 16 de noviembre</p>
                    <p>Más información pronto</p>
                </article>
            </div>
        </div>
    </section>
    <!-- fin de feria -->
    <!---PRECIOS-->
    @include('frontend.inscription.price')
    <!---FIN DE PRECIOS---->
    <!--TURISMO-->
    @include('frontend.tourism.touring')
    <!-- /.container -->
    <!--FIN DE TURISMO-->
    <br>
    @include('frontend.inscription.info')
    
    
@endsection