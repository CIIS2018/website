<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>XD</title>



    <!-- Fonts -->

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">




    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

  {{-- <div style="text-align:center:150px;" > --}}

    {{-- <div class="container">
      <div class="row">
        <div class="col-4 ">
            <div class="container" style="border: 5px solid red;">              
              <div class="row">
                <div class="col-4  mx-0 my-auto">
                    <img src="{{asset('icono.png')}}" class="img-fluid d-block my-0">
               </div>
                <div class="col-4">
                   <p class="mb-0 bold text-justify" style="font-size: 10pt;">XIX CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS</p>
                   <p class="mb-0" style="font-size: 10pt;">Universidad Nacional Jorge Basadre Grohmann 1</p>
                </div>
              </div>
              <hr>


              <div class="row">
                <div class="col">
                  <p>Asistente :</p>
                  <p >{{$datos->nombre}}</p>
                  <p >{{$datos->apellido}}</p>
                  <p >UNJBG</p>
                  <p>Por concepto de:</p>
                  <p class="text-center">INSCRIPCION AL XIX</p>
                  <p class="text-center">CIIS 2018</p>
                </div>
              </div>


              <hr>
            </div> --}}



            

        {{-- </div>

      </div>

    </div> --}}
    <style>
      p{
        font-family: 'Source Serif Pro', serif;
      }
      hr{
        border-top: 1px solid rgba(3, 99, 242);
      }
hr.style11 {
	height: 6px;
	background: url(http://ibrahimjabbari.com/english/images/hr-11.png) repeat-x 0 0;
    border: 0;
}
      </style>

    <div style="margin-left:35px;width:340px">
	      <img src="{{asset('images/icono.png')}}" style="width:100px;margin-bottom:5px">
<p style="margin-top:-90px;margin-left: 110px;font-size: 8pt;font-style: italic;">Universidad Nacional Jorge Basadre Grohmann</p>      
<p style="margin-left: 110px;font-weight: bold;" >XIX CONGRESO INTERNACIONAL </p>
      <p style="margin-top: -20px;margin-left: 115px;font-weight: bold;">DE INFORMÁTICA Y SISTEMAS</p>
      
      
<hr style="margin-bottom: 0">
      <p style="
      font-weight: bold;">REGISTRO DE INSCRIPCIÓN DE:</p>
                  <p style="
                  text-align: center;
                  font-size: 20pt;
                  font-weight: bold;
                  margin-bottom: 0;
              ">{{$datos->nombre}}</p>
                  <p style="
                  text-align: center;
                  font-size: 20pt;
                  font-weight: bold;margin-bottom:0%
              ">{{$datos->apellido}}</p>
                  <p style="
                  text-align: center;">{{$datos->institucion}}</p>
      <p style="
      text-align: center;font-weight: bold;">Por concepto de : </p>
      <p style="
      text-align: center;font-size: 15pt;margin-bottom: 0;font-weight: bold;font-style:italic;margin-bottom:0%">INSCRIPCIÓN AL XIX CIIS 2018</p>      
      <hr style="margin-top: 0">
      @if($datos->tipo_inscripcion === 'estudiante_esis')

      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Estudiante ESIS</p>

      @elseif ($datos->tipo_inscripcion==='estudiante')

      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Estudiante</span></p>

      @elseif ($datos->tipo_inscripcion==='profesional')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Profesional</span></p>
      @elseif ($datos->tipo_inscripcion==='egresado_esis')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Egresado Esis</span></p>
      @elseif ($datos->tipo_inscripcion==='beca')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Beca</p>
      @elseif ($datos->tipo_inscripcion==='semibeca_profesional')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Semibeca profesional</span></p>
      @elseif ($datos->tipo_inscripcion==='semibeca_estudiante')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Semibeca estudiante</span></p>
      @elseif ($datos->tipo_inscripcion==='docente_esis')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Docente esis</span></p>
      @elseif ($datos->tipo_inscripcion==='delegacion1')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
      @elseif ($datos->tipo_inscripcion==='delegacion2')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
      @elseif ($datos->tipo_inscripcion==='delegacion3')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
      @elseif ($datos->tipo_inscripcion==='delegacion4')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
      @elseif ($datos->tipo_inscripcion==='agosto')
      <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Promoción agosto</span></p>
  @elseif ($datos->tipo_inscripcion==='organizador')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Organizador</span></p>
  
  @elseif ($datos->tipo_inscripcion==='profesional-UNA-delegacion')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegacion</span></p>
  

      @endif

      {{-- <p style="text-align: center;font-weight: bold;">Inversión: S/.{{$datos->pago}}.00</p> --}}
      <p style="font-style:italic;text-align:center" >"Gestión del conocimiento e innovación tecnológica"</p>
      <p style="font-weight: bold;text-align:center;margin-bottom:0">¡Gracias por su participación!</p>
      
      <hr style="margin-top:0">
      <p style="font-size: 15pt;margin-bottom:0%;font-weight:bold">Ticket No.<span style="font-size:19pt">{{$datos->id}}</span></p>

 @if(!isset($cobrador->name))
      <p style="font-weight: bold;margin-bottom:0%">Atendido por : Miriam Marisol Mamani Mamani </p>
      @else
      <p style="font-weight: bold;margin-bottom:0%">Atendido por : {{$cobrador->name}} </p>
      @endif

      <p style="font-weight: bold;">Fecha:<span style="font-weight: normal"> {{$datos->updated_at}} </span></p>
      <hr>
      <p style="font-weight: bold;font-size: 9.6pt;">Nota: <span style="font-weight: normal">Conservar su ticket para la entrega de sus materiales</span></p>
	          {{-- <label style="color:blue">{{$datos->codigo}}<br>
            {{$datos->nombre}} 
            {{$datos->apellido}}<br>{{$datos->updated_at}}<br>

            <h1 style="margin-left:5px">s/.{{$datos->pago}}.00</h1></label> --}}

            {{-- @if($datos->tipo_inscripcion === 'estudiante_esis')

            <p>Estudiante ESIS</p>

            @elseif ($datos->tipo_inscripcion==='estudiante')

            <p>Estudiante</p>

            @elseif ($datos->tipo_inscripcion==='profesional')
            <p>Profesional</p>
            @elseif ($datos->tipo_inscripcion==='egresado_esis')
            <p>Egresado Esis</p>
            @elseif ($datos->tipo_inscripcion==='beca')
            <p>Beca</p>
            @elseif ($datos->tipo_inscripcion==='semibeca_profesional')
            <p>Semibeca profesional</p>
            @elseif ($datos->tipo_inscripcion==='semibeca_estudiante')
            <p>Semibeca estudiante</p>
            @elseif ($datos->tipo_inscripcion==='docente_esis')
            <p>Docente esis</p>
            @elseif ($datos->tipo_inscripcion==='delegacion1')
            <p>Delegacion 1</p>
            @elseif ($datos->tipo_inscripcion==='delegacion2')
            <p>Delegacion</p>
            @elseif ($datos->tipo_inscripcion==='delegacion3')
            <p>Delegacion</p>
            @elseif ($datos->tipo_inscripcion==='delegacion4')
            <p>Delegacion</p>

            @endif --}}

 
  </div>

  <div style="margin-left:570px;margin-top:-649px;width:340px">
<img src="{{asset('images/icono.png')}}" style="width:100px;margin-bottom:5px">        
<p style="margin-top:-90px;margin-left: 110px;font-size: 8pt;font-style: italic;">Universidad Nacional Jorge Basadre Grohmann</p>        
<p style="margin-left: 110px;font-weight: bold;" >XIX CONGRESO INTERNACIONAL </p>
        <p style="margin-top: -20px;margin-left: 115px;font-weight: bold;">DE INFORMÁTICA Y SISTEMAS</p>
        
        
  <hr style="margin-bottom: 0">
        <p style="
        font-weight: bold;">REGISTRO DE INSCRIPCIÓN DE:</p>
                    <p style="
                    text-align: center;
                    font-size: 20pt;
                    font-weight: bold;
                    margin-bottom: 0;
                ">{{$datos->nombre}}</p>
                    <p style="
                    text-align: center;
                    font-size: 20pt;
                    font-weight: bold;margin-bottom:0%
                ">{{$datos->apellido}}</p>
                    <p style="
                    text-align: center;">{{$datos->institucion}}</p>
        <p style="
        text-align: center;font-weight: bold;">Por concepto de : </p>
        <p style="
        text-align: center;font-size: 15pt;margin-bottom: 0;font-weight: bold;font-style:italic;margin-bottom:0%">INSCRIPCIÓN AL XIX CIIS 2018</p>      
        <hr style="margin-top: 0">
        @if($datos->tipo_inscripcion === 'estudiante_esis')
  
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Estudiante ESIS</p>
  
        @elseif ($datos->tipo_inscripcion==='estudiante')
  
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Estudiante</span></p>
  
        @elseif ($datos->tipo_inscripcion==='profesional')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Profesional</span></p>
        @elseif ($datos->tipo_inscripcion==='egresado_esis')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Egresado Esis</span></p>
        @elseif ($datos->tipo_inscripcion==='beca')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Beca</p>
        @elseif ($datos->tipo_inscripcion==='semibeca_profesional')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Semibeca profesional</span></p>
        @elseif ($datos->tipo_inscripcion==='semibeca_estudiante')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Semibeca estudiante</span></p>
        @elseif ($datos->tipo_inscripcion==='docente_esis')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Docente esis</span></p>
        @elseif ($datos->tipo_inscripcion==='delegacion1')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
        @elseif ($datos->tipo_inscripcion==='delegacion2')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
        @elseif ($datos->tipo_inscripcion==='delegacion3')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
        @elseif ($datos->tipo_inscripcion==='delegacion4')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegación</span></p>
        @elseif ($datos->tipo_inscripcion==='agosto')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Promoción agosto</span></p>
  @elseif ($datos->tipo_inscripcion==='organizador')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Organizador</span></p>
   @elseif ($datos->tipo_inscripcion==='profesional-UNA-delegacion')
        <p style="font-weight: bold">Tipo de inscripción: <span style="font-weight:normal">Delegacion</span></p>
  


        @endif
  
        {{-- <p style="text-align: center;font-weight: bold;">Inversión: S/.{{$datos->pago}}.00</p> --}}
        <p style="font-style:italic;text-align:center" >"Gestión del conocimiento e innovación tecnológica"</p>
        <p style="font-weight: bold;text-align:center;margin-bottom:0">¡Gracias por su participación!</p>
        
        <hr style="margin-top:0">
        <p style="font-size: 15pt;margin-bottom:0%;font-weight:bold">Ticket No. <span style="font-size:19pt">{{$datos->id}}</span></p>

       @if(!isset($cobrador->name))
      <p style="font-weight: bold;margin-bottom:0%">Atendido por : Miriam Marisol Mamani Mamani </p>
      @else
      <p style="font-weight: bold;margin-bottom:0%">Atendido por : {{$cobrador->name}} </p>
      @endif

        <p style="font-weight: bold;">Fecha:<span style="font-weight: normal"> {{$datos->updated_at}} </span></p>
        <hr>
        <p style="font-weight: bold;font-size: 9.6pt;">Nota: <span style="font-weight: normal">Conservar su ticket para la entrega de sus materiales</span></p>
 
            {{-- <label style="color:blue">{{$datos->codigo}}<br>
              {{$datos->nombre}} 
              {{$datos->apellido}}<br>{{$datos->updated_at}}<br>
  
              <h1 style="margin-left:5px">s/.{{$datos->pago}}.00</h1></label> --}}
  
              {{-- @if($datos->tipo_inscripcion === 'estudiante_esis')
  
              <p>Estudiante ESIS</p>
  
              @elseif ($datos->tipo_inscripcion==='estudiante')
  
              <p>Estudiante</p>
  
              @elseif ($datos->tipo_inscripcion==='profesional')
              <p>Profesional</p>
              @elseif ($datos->tipo_inscripcion==='egresado_esis')
              <p>Egresado Esis</p>
              @elseif ($datos->tipo_inscripcion==='beca')
              <p>Beca</p>
              @elseif ($datos->tipo_inscripcion==='semibeca_profesional')
              <p>Semibeca profesional</p>
              @elseif ($datos->tipo_inscripcion==='semibeca_estudiante')
              <p>Semibeca estudiante</p>
              @elseif ($datos->tipo_inscripcion==='docente_esis')
              <p>Docente esis</p>
              @elseif ($datos->tipo_inscripcion==='delegacion1')
              <p>Delegacion 1</p>
              @elseif ($datos->tipo_inscripcion==='delegacion2')
              <p>Delegacion</p>
              @elseif ($datos->tipo_inscripcion==='delegacion3')
              <p>Delegacion</p>
              @elseif ($datos->tipo_inscripcion==='delegacion4')
              <p>Delegacion</p>
  
              @endif --}}
  
   
    </div>

    
    
{{-- 
  <div class="visible-print text-center">

    <p>CIIS XIX</p>

</div> --}}

<body>

<script type="text/javascript">

window.onload = function() {

  window.print();

};

</script>

</html>

