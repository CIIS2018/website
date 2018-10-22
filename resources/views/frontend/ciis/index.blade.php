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
   @include('frontend.fair.fair')
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
    
    
    @include('frontend.maps.mapa')
    
@endsection