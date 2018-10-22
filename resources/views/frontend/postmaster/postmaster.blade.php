<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
          <link rel=StyleSheet href="{{asset('css/frontend.min.css')}}">
    {{-- <link rel=StyleSheet href="{{asset('css/postmaster/ponentes.css')}}">
    <link rel=StyleSheet href="{{asset('css/postmaster/horario.css')}}"> --}}
    <link rel=StyleSheet href="{{asset('css/postmaster/rotating-card.css')}}">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.ciistacna.com/">
    <meta property="og:title" content="XIX Congreso Internacional de Informatica y Sistemas - CIIS 2018">
    <meta property="og:image" content="http://www.ciistacna.com/images/logo_face.jpg">
    <meta property="og:description" content="Se concibe con la finalidad de actualizar, estimular y difundir los avances de la investigación científica y tecnológica">
    <link rel="icon" href="images/logo2018.ico">
    <link rel="stylesheet" href="">
    
    <title>XIX Congreso Internacional de Informática y Sistemas 2018 - Postmaster</title>
</head>

<body>
@include('frontend.includes.navbar')
{{-- @include('frontend.includes.header-post') --}}
<div class="container">
    <h1 class="text-primary text-center mx-3">Ponentes del XV Postmaster</h1>
  <div class="row">
      {{-- <h1 class="title">
          This is our awesome team
          <br>
          <small>Present your team in an interesting way</small>
      </h1> --}}
      {{-- <div class="col-sm-12"> --}}
       <div class="col-md-4 col-sm-6">
           <div class="card-container">
              <div class="card">
                  <div class="front">
                      <div class="cover">
                          <img src="images/postmaster/ponentes/Ing. Wilson_César_Callisaya.jpg"/>
                      </div>
                      <div class="user">
                          <img class="img-thumbnail" src="images/postmaster/ponentes/Ing. Wilson_César_Callisaya.jpg"/>
                      </div>
                      <div class="content">
                          <div class="main">
                              <h3 class="name">Ing.Wilson César Calisaya Choquecota</h3>
                              <p class="profession">Subgerente de DEMARKTEC</p>
                              <p class="text-center">"Sistema de administración de servicios para empresas de taxi"</p>
                          </div>
                          
                          {{-- <div class="footer">
                              <i class="fa fa-mail-forward"></i> Auto Rotation
                          </div> --}}
                      </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                      {{-- <div class="header-post">
                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                      </div> --}}
                      <div class="content">
                          <div class="main">
                              <h4 class="text-center">Ing. Wilson Calisaya Choquecota</h4>
                                <p class="text-center">
                                <ul>    
                                <li>Maestría en Ingeniería de Sistemas y Administración de tecnologías de información.</li>
                                    <li>Diploma de especialización en desarrollo de aplicaciones para ANDROID.</li>
                                  <li>Desarrollador Android, actualmente está trabajando en proyectos de aplicativos de conexión pasajero - taxista y plataformas de administración de servicios de taxi.</li>
                                  </ul>
                                </p>

                              {{-- <div class="stats-container">
                                  <div class="stats">
                                      <h4>235</h4>
                                      <p>
                                          Followers
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>114</h4>
                                      <p>
                                          Following
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>35</h4>
                                      <p>
                                          Projects
                                      </p>
                                  </div>
                              </div> --}}

                          </div>
                      </div>
                      <div class="footer">
                          <div class="social-links text-center">
                              <a href="https://www.facebook.com/ciistacna/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                              <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                              <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                          </div>
                      </div>
                  </div> <!-- end back panel -->
              </div> <!-- end card -->
          </div> <!-- end card-container -->
      </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
      <div class="col-md-4 col-sm-6">
           <div class="card-container">
              <div class="card">
                  <div class="front">
                      <div class="cover">
                          <img src="images/postmaster/ponentes/Mithzi_Koc.JPG"/>
                      </div>
                      <div class="user">
                          <img class="img-fluid" src="images/postmaster/ponentes/Mithzi_Koc.JPG"/>
                      </div>
                      <div class="content">
                          <div class="main">
                              <h3 class="name">MBA Vanesa Khaterine Mithzi Koc Castañeda</h3>
                              <p class="profession">Executive MBA en EADA Business School (España)</p>
                              <p class="text-center">"La disrupción digital en los negocios"</p>
                          </div>
                          
                          {{-- <div class="footer">
                              <button class="btn btn-simple" onclick="rotateCard(this)">
                                  <i class="fa fa-mail-forward"></i> Manual Rotation
                              </button>
                          </div> --}}
                      </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                      {{-- <div class="header-post">
                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                      </div> --}}
                      <div class="content">
                          <div class="main">
                              <h4 class="text-center">MBA Vanesa Koc Castañeda</h4>
                              <p class="text-center">
                                <ul>
                                        <li>Master en Dirección y Gestión de Empresas.</li>
                                        <li>Ejecutiva MBA por EADA Business School (España).</li>
                                        {{-- <li>Fue asesora comercial en el Banco de Crédito BCP.</li> --}}
                                        <li>Fue asesora principal en el Banco de Crédito BCP.</li>
                                        <li>Asistente de banca negocios en el Banco de Crédito BCP.</li>
                                       <li> Actualmente es ejecutiva de negocios del Banco de Crédito BCP.</li>
                                        <li>Altamente orientada a cliente y resultados, seguimiento de indicadores, con capacidad de negociación. Analista de negocios.</li>
                                        
                                </ul>
                              </p>

                              {{-- <div class="stats-container">
                                  <div class="stats">
                                      <h4>235</h4>
                                      <p>
                                          Followers
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>114</h4>
                                      <p>
                                          Following
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>35</h4>
                                      <p>
                                          Projects
                                      </p>
                                  </div>
                              </div> --}}

                          </div>
                      </div>
                      <div class="footer">
                          {{-- <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                              <i class="fa fa-reply"></i> Back
                          </button> --}}
                          <div class="social-links text-center">
                              <a href="https://www.facebook.com/ciistacna/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                              <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                              <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                          </div>
                      </div>
                  </div> <!-- end back panel -->
              </div> <!-- end card -->
          </div> <!-- end card-container -->
      </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
      <div class="col-md-4 col-sm-6">
          <div class="card-container">
              <div class="card">
                  <div class="front">
                      <div class="cover">
                          <img src="images/postmaster/ponentes/Pablo_Ameri.jpg"/>
                      </div>
                      <div class="user">
                          <img class="img-fluid" src="images/postmaster/ponentes/Pablo_Ameri.jpg"/>
                      </div>
                      <div class="content">
                          <div class="main">
                              <h3 class="name">Mg. Pablo Humberto Ameri Villegas</h3>
                              <p class="profession">Director de la Oficina de Informática de la Direccion Regional de Salud de Tacna</p>
                              <p class="text-center">"Ciclo de vida de la aplicación empresarial Scop-Contable en plataforma Microsoft
                                    "</p>
                          </div>
                          {{-- <div class="footer">
                              <div class="rating">
                                  <i class="fa fa-mail-forward"></i> Auto Rotation
                              </div>
                          </div> --}}
                          
                      </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                      {{-- <div class="header-post">
                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                      </div> --}}
                      <div class="content">
                          <div class="main">
                              <h4 class="text-center">Mg. Pablo Ameri Villegas</h4>
                              <p class="text-center">
                                    <ul>
                                            <li>Tiene una maestría en Gestión Empresarial.</li>
                                            <li>Trabajó en el Área de Informática en la Caja Municipal de Ahorro y Crédito de Tacna S.A.</li>
                                            <li>Fue docente en la Universidad Los Angeles de Chimbote - Sede Tacna.</li>
                                            <li>Actualmente trabaja en la Dirección Regional de Salud Tacna como director en la oficina de Informática, Telecomunicaciones y Estadística.</li>
                                            
                                    </ul>
                              </p>

                              {{-- <div class="stats-container">
                                  <div class="stats">
                                      <h4>235</h4>
                                      <p>
                                          Followers
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>114</h4>
                                      <p>
                                          Following
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>35</h4>
                                      <p>
                                          Projects
                                      </p>
                                  </div>
                              </div> --}}

                          </div>
                      </div>
                      <div class="footer">
                          <div class="social-links text-center">
                              <a href="https://www.facebook.com/ciistacna/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                              <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                              <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                          </div>
                      </div>
                  </div> <!-- end back panel -->
              </div> <!-- end card -->
          </div> <!-- end card-container -->
      </div> <!-- end col-sm-3 -->
      <div class="col-md-4 col-sm-6">
          <div class="card-container">
             <div class="card">
                 <div class="front">
                     <div class="cover">
                         <img src="images/postmaster/ponentes/Tony_choque.jpg"/>
                     </div>
                     <div class="user">
                         <img class="img-thumbail" src="images/postmaster/ponentes/Tony_choque.jpg"/>
                     </div>
                     <div class="content">
                         <div class="main">
                             <h3 class="name">Ing.Tony Liedyn Choque Ramos</h3>
                             <p class="profession">Programador GIS</p>
                             <p class="text-center">"Generación de malla"</p>
                         </div>
                         
                         {{-- <div class="footer">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div> --}}
                     </div>
                 </div> <!-- end front panel -->
                 <div class="back">
                     {{-- <div class="header-post">
                         <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                     </div> --}}
                     <div class="content">
                         <div class="main">
                             <h4 class="text-center">Ing.Tony Choque Ramos</h4>
                             <p class="text-center">
                                    <ul>
                                            <li>Prácticas profesionales en Electrosur S.A. 2012</li>
                                            <li>Ingeniero de software Feb 2013 - Ago 2013 Electrosur S.A.</li>
                                            <li>Desarrollo de un sistema para la generación de modelos 3D de huesos humanos para fines de exploración y cuantificación ósea en la Universidad Católica de San Pablo</li>
                                            <li>Programador GIS Electrosur S.A 2017-presente</li>
                                    </ul>
                             </p>

                             {{-- <div class="stats-container">
                                 <div class="stats">
                                     <h4>235</h4>
                                     <p>
                                         Followers
                                     </p>
                                 </div>
                                 <div class="stats">
                                     <h4>114</h4>
                                     <p>
                                         Following
                                     </p>
                                 </div>
                                 <div class="stats">
                                     <h4>35</h4>
                                     <p>
                                         Projects
                                     </p>
                                 </div>
                             </div> --}}

                         </div>
                     </div>
                     <div class="footer">
                         <div class="social-links text-center">
                                <a href="https://www.facebook.com/ciistacna/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                         </div>
                     </div>
                 </div> <!-- end back panel -->
             </div> <!-- end card -->
         </div> <!-- end card-container -->
     </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
     <div class="col-md-4 col-sm-6">
          <div class="card-container">
             <div class="card">
                 <div class="front">
                     <div class="cover">
                         <img src="images/ing-Eduardo-slee.jpg"/>
                     </div>
                     <div class="user">
                         <img class="img-circle" src="images/ing-Eduardo-slee.jpg"/>
                     </div>
                     <div class="content">
                         <div class="main">
                             <h3 class="name">Ing. Eduardo Jesús Slee Ticona</h3>
                             <p class="profession">Web Developer</p>
                             <p class="text-center">"Sistemas de Información en el sector Salud"</p>
                         </div>
                         
                         {{-- <div class="footer">
                             <button class="btn btn-simple" onclick="rotateCard(this)">
                                 <i class="fa fa-mail-forward"></i> Manual Rotation
                             </button>
                         </div> --}}
                     </div>
                 </div> <!-- end front panel -->
                 <div class="back">
                     {{-- <div class="header-post">
                         <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                     </div> --}}
                     <div class="content">
                         <div class="main">
                             <h4 class="text-center">Ing. Eduardo Slee Ticona</h4>
                             <p class="text-center">
                                 <ul>
                                    <li>Profesional en Tecnologías de la Información.</li>
                                   <li> Más de 10 años de Experiencia como Analista – Desarrollador de Sistemas Informáticos.</li>
                                   <li> Capacitado en el uso del software de Biometría Facial de la empresa  FacePhi en España.</li>
                                   </ul>
                             </p>

                             {{-- <div class="stats-container">
                                 <div class="stats">
                                     <h4>235</h4>
                                     <p>
                                         Followers
                                     </p>
                                 </div>
                                 <div class="stats">
                                     <h4>114</h4>
                                     <p>
                                         Following
                                     </p>
                                 </div>
                                 <div class="stats">
                                     <h4>35</h4>
                                     <p>
                                         Projects
                                     </p>
                                 </div>
                             </div> --}}

                         </div>
                     </div>
                     <div class="footer">
                         {{-- <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                             <i class="fa fa-reply"></i> Back
                         </button> --}}
                         <div class="social-links text-center">
                                <a href="https://www.facebook.com/ciistacna/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                         </div>
                     </div>
                 </div> <!-- end back panel -->
             </div> <!-- end card -->
         </div> <!-- end card-container -->
     </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
     
  </div> <!-- end row -->
  
</div>



<section id="authors" class="my-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h2 class="text-primary pb-3">
                        Auspiciadores del XV POSTMASTER
                    </h2>
                        <!-- <p class="lead pb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet omnis fuga maiores excepturi dolores explicabo.
                        </p> -->
                </div>
            </div>
        </div>
        <div class="row">
           
            <!--
            <div class="col-lg-4 col-md-6">
                <div class="card" style="border: none">
                    <div class="card-body">
                    <img class="img-fluid mb-3" src="{{asset('images/auspicios/Grupo-Lacume.jpeg')}}" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary">Grupo Lacume</h4>

                        {{-- <p style="font-size: 11pt">Se trabajan con tareas orientadas a la exploración de los datos, con la intención de encontrar
                            patrones o conocimiento útil, que permita optimizar o rentabilizar un proceso de negocio.</p> --}}
                    </div>
                </div>
            </div>
            -->
            
            <div class="col-lg-3 col-md-6">
                <div class="card" style="border: none">
                    <div class="card-body">
                    <img class="img-fluid mb-3" src="{{asset('images/auspicios/El-balconcito.jpg')}}" alt="" class="img-fluid mb-3">
                        {{-- <h4 class="text-primary">El Balconcito</h4> --}}

                        {{-- <p style="font-size: 11pt">Se trabajan con tareas orientadas a la exploración de los datos, con la intención de encontrar
                            patrones o conocimiento útil, que permita optimizar o rentabilizar un proceso de negocio.</p> --}}
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card text-center" style="border: none">
                    <div class="card-body text-center">
                        <img class="img-fluid mb-3" src="{{asset('images/auspiciadores/graphicom.jpg')}}" alt="" class="img-fluid mb-3">

                        {{-- <h4 class="text-primary">Graphicom</h4> --}}

                        {{-- <p style="font-size: 11pt">Representa el conjunto de métodos, herramientas y técnicas que se utilizan en el desarrollo del
                            software.</p> --}}
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card" style="border: none">
                    <div class="card-body">
                        <img class="img-fluid mb-3" src="{{asset('images/auspiciadores/logo-pelipor.png')}}" alt="" class="img-fluid mb-3">
                        {{-- <h4 class="text-primary">Pelipor</h4> --}}
                        {{-- <p style="font-size: 11pt">Hace referencia a los medios, tecnologías y protocolos necesarios para el intercambio de la información
                            en una red de computadoras.</p> --}}
                    </div>
                </div>
            </div>

            

            <div class="col-lg-3 col-md-6">
                <div class="card" style="border: none">
                    <div class="card-body">
                        <img class="img-fluid mb-3" src="{{asset('images/auspiciadores/libreria.jpeg')}}" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary"></h4>
                        {{-- <p style="font-size: 11pt">Hace referencia a los medios, tecnologías y protocolos necesarios para el intercambio de la información
                            en una red de computadoras.</p> --}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



{{-- <div class="ponentes" id="ponentes">
    <h2 class="text-primary text-center">PONENTES PARA EL POSTMASTER</h2>

   
    <div class="responsive">
        <div class="gallery">
            <div class="container contenedor-ponente" style="padding-top: 15px;">
                <img src="images/ing-Wilson-Calisaya.jpg" alt="ponente1" class="image image-pon1">
                <div class="middle">
                    <div class="text">Desarrollador de apps en Android</div>
                    <div class="text">TEMA: "DESARROLLO DE APPS PARA IOS"</div>
                </div>
            </div>
            <div class="desc">Wilson Calizaya</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <div class="container" style="padding-top: 15px;">
                <img src="images/ing-Eduardo-slee.jpg" alt="ponente2" class="image image-pon2">
                <div class="middle">
                    <div class="text">Ingeniero en Informática y Sistemas, Profesional en Tecnologías de la Información</div>
                    <div class="text"></div>
                    <div class="text"></div>
                </div>
            </div>
            <div class="desc">Eduardo Jesús Slee Ticona</div>
        </div>
    </div>
    
    <div class="responsive">
      <div class="gallery">
        <div class="container" style="padding-top: 15px;">
      <img src="images/ponente1.jpg" alt="ponente2" class="image">
      <div class="middle">
        <div class="text">Tema de la exposición</div>
        <div class="text"></div>
        <div class="text"></div>
      </div>
    </div>
        <div class="desc">Ponente 3</div>
      </div>
    </div>
    <div class="responsive4">
      <div class="gallery">
        <div class="container" style="padding-top: 15px;">
      <img src="images/ponente1.jpg" alt="ponente3" class="image">
      <div class="middle">
        <div class="text">Tema de la exposición</div>
        <div class="text"></div>
        <div class="text"></div>
      </div>
    </div>
        <div class="desc">Ponente 4</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <div class="container" style="padding-top: 15px;">
      <img src="images/ponente1.jpg" alt="ponente1" class="image">
      <div class="middle">
        <div class="text">Tema de la exposición</div>
        <div class="text"></div>
        <div class="text"></div>
      </div>
    </div>
        <div class="desc">Ponente 5</div>
      </div>
    </div>
    </div>
    
    <div class="horario" id="horario">
     
        <h2 class="text-primary text-center">HORARIO DEL POSTMASTER</h2>
        <h4 class="text-primary text-center">Pronto más información</h4>
      
      
    </div>     --}}

@include('frontend.includes.footer')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        
        <script src="https://buymyfuture.com/wp-content/themes/buymyfuture/js/vendor/jquery.countdown-2.1.0/jquery.countdown.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>


<!-- <script type="text/javascript" src="  https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.4/js/smooth-scroll.min.js"></script> -->
</body>

</html>
