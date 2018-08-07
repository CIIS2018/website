@extends('frontend.layouts.app')

@section('title','XIX Congreso Internacional de Informática y Sistemas 2018 - Preinscripciones' )

@section('after-scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-database.js"></script>
@endsection

@section('content')
    
    <div class="container-fluid bg-primary" style="padding-top: 3%;padding-bottom: 3%;padding-left:15%; padding-right:15%">
        <div class="container bg-white" style="margin:0 auto;padding:5%">
            <h2 class="text-primary mb-3">Inscripción</h2>
            <h4 class="mb-3" style="font-size: 11pt">Asegura tu lugar en el XIX Congreso Internacional de Informática y Sistemas e inscribite</h4>
            <form id="inscripcion">
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <input type="text" class="form-control" id="dni" placeholder="DNI">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                    </div>
                </div>
                
                <div class="form-group">
                    
                    <select class="form-control" id="inscripcion">
                        <option value="" disabled selected>Tipo de inscricpion</option>
                        <option value="profesional">Profesional</option>
                        <option value="estudiante">Estudiante</option>
                    
                    </select>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <input type="text" class="form-control" id="exampleInputCelular" placeholder="Celular">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <label for="exampleFormControlFile1">Foto del voucher</label>
                        <input type="file" class="form-control-file" id="">
                    </div>
                
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection


    
