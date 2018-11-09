@extends('frontend.layouts.app')

@section('title','XIX Congreso Internacional de Informática y Sistemas 2018 - Preinscripciones' )

@section('after-scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('content')
<div class="container-fluid bg-primary" style="padding-top: 3%;padding-bottom: 3%;padding-left:15%; padding-right:15%">
    <div class="container bg-white mt-xl-5" style="margin:0 auto;padding:5%">
        <h2 class="text-primary mb-3">Inscripción</h2>
        <h4 class="mb-3" style="font-size: 11pt;">Asegura tu lugar en el XIX Congreso Internacional de Informática y Sistemas e inscribete</h4>
        <h4 class="mb-3" style="font-size: 11pt;color:green">*Escribe tus nombres y apellidos completos</h4>
        <form id="inscripcion" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombres Completos">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-nombre"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" name="lastname" id="apellido" placeholder="Apellido Paterno y Materno">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-apellido"></div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-dni"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" name="city" id="ciudad" placeholder="Ciudad">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-ciudad"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <select class="form-control" name="type_inscription" id="tipo_inscripcion">
                        <option value="defecto">Tipo de inscripción</option>
                        <option value="profesional">Profesional</option>
                        <option value="estudiante">Estudiante</option>

                    </select>
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-inscripcion"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" name="institution" id="institucion" placeholder="Institución">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-institucion"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <input type="text" class="form-control" id="celular" name="cellphone" placeholder="Celular">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-celular"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-email"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <label for="exampleFormControlFile1" style="color:black;">Foto del voucher(en formato jpeg/jpg/png)</label>
                    <input type="file" class="form-control-file" id="fotovoucher"  name="fotovoucher">
                    <div class="form-control-feedback" style="display: none;color: red" id="alerta-imagen"></div>
                </div>

            </div>
            <button type="submit" class="btn-primary info">Enviar</button>
            <div class="statusMsg"></div>

        </form>
        <div id="cargado"></div>	
<div class="text-primary mrg-3">Si tiene alguna duda puede enviar un correo al ciistacna@unjbg.edu.pe </div>
    </div>
</div>
    
@endsection

   
