<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">

    
    <link rel=StyleSheet href="{{asset('css/frontend.min.css')}}" title="precios">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.ciistacna.com/">
    <meta property="og:title" content="ciis tacna">
    <meta property="og:image" content="http://www.ciistacna.com/images/logofinal2018.png">
    <meta property="og:description" content="ciis">
    <link rel="icon" href="images/logo2018.ico">
    
    <title>XIX Congreso Internacional de Informática y Sistemas 2018</title>
</head>

<body>

<!--COMENSAMOS EL NAVEGADOR-->
@include('frontend.includes.navbar')
<!--TERMINADMOS E NAVEGADOR-->
<!--COMENSAMOS EL HEADER-->

@include('frontend.includes.header')
<!--TERMINOS EL HEADER-->
<!--COMIENSO DE INFORMACION-->
<section class="container-fluid">
    <div class="container">
        <div class="row seccion">
            <!-- <article class="col-sm-12 col-md-6">
                <h2 class="seccion__titulo"><span class="titulo--blue">Conoce</span> un poco<br/> mas del <span class="titulo--blue">evento</span></h2>
                <p></p>
            </article> -->
            <article class="col-sm-12 col-md-12">
                <h2 class="seccion__titulo">
                    <span class="titulo--blue">Conoce</span> un poco más del
                    <span class="titulo--blue">evento</span>
                </h2>
                <p></p>
            </article>
            <div class="col-sm-12 col-md-6 mb-2 d-flex align-items-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/aS5bgHWPZdM" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                </div>
            
            </div>
            <br>
            <div class="col-sm-12 col-md-6 mb-2 d-flex align-items-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/6bP6ouor0AY" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                </div>
            
            </div>
        </div>
    </div>
</section>
<!-- <section class="container-fluid">
    <div class="container">
        <div class="row seccion">
            
            <div class="col-sm-12 col-md-6 d-flex align-items-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/aS5bgHWPZdM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                
            </div>
            <article class="col-sm-12 col-md-6">
                <h2 class="seccion__titulo"><span class="titulo--blue">Conoce</span> un poco<br/> mas del <span class="titulo--blue">evento</span></h2>
                <p>Oat cake chocolate oat cake. Fruitcake chocolate cake toffee tiramisu toffee lemon drops croissant fruitcake brownie. Lollipop fruitcake sesame snaps toffee marshmallow. Cheesecake lemon drops powder halvah tart pudding. Bear claw dragée danish apple pie. Pudding tart jelly sweet roll fruitcake dessert. Fruitcake cake sesame snaps.

                    Powder carrot cake gummies toffee. Oat cake gummi bears tart chocolate cake fruitcake jelly beans lollipop. Cotton candy gummi bears marzipan gingerbread candy canes pudding cake macaroon lollipop. Halvah sesame snaps fruitcake chocolate cake sweet roll fruitcake jelly beans. Jelly beans pie powder muffin chupa chups. Soufflé marshmallow ice cream liquorice croissant jujubes toffee dragée.</p>
            </article>
        </div>
    </div>
</section> -->
<!--FIN DE INFORMACION-->

<!-- Card Regular -->
@include('frontend.presenter.presenters')

<!-- Lineas tematicas -->
<section id="authors" class="my-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h2 class="text-primary pb-3">
                        Ejes temáticos del XIX CIIS
                    </h2>
                    <!-- <p class="lead pb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet omnis fuga maiores excepturi dolores explicabo.
                        </p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 50px;height: 60px;" src="images/ico-uno.png" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary">Analítica de datos</h4>
                        
                        <p style="font-size: 11pt">Se trabajan con tareas orientadas a la exploración de los datos, con la intención de encontrar
                            patrones o conocimiento útil, que permita optimizar o rentabilizar un proceso de negocio.</p>
                    
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 50px;height: 60px;" src="images/ico-dos.png" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary">Telemática</h4>
                        <p style="font-size: 11pt">Hace referencia a los medios, tecnologías y protocolos necesarios para el intercambio de la información
                            en una red de computadoras.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 50px;height: 60px;" src="images/ico-tres.png" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary">Ciencias de la computación</h4>
                        
                        <p style="font-size: 11pt">Abarca el estudio de las bases teóricas de la información y la computación, así como su aplicación
                            en sistemas computacionales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 50px;height: 60px;" src="images/ico-cuatro.png" alt="" class="img-fluid mb-3">
                        <h4 class="text-primary">Ingeniería de software</h4>
                        
                        <p style="font-size: 11pt">Representa el conjunto de métodos, herramientas y técnicas que se utilizan en el desarrollo del
                            software.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<div class="Precios">
    <div class="precio-wrapper clearfix">
        <h2 class="text-primary text-center pb-3" id="precios">Precios </h2>
        <h4 class="text-primary text-center">Nro Cuenta Interbank: 3403118664317 </h4>
        <br>
        <div class="precio-table ">
            <h3 class="precio-title">Junio-Julio</h3>
            <!-- <div class="precio">S/.80</div> -->
            
            <ul class="table-list">
                <li>Estudiantes
                    <span class="unlimited">S/.60.00</span>
                </li>
                <li>Profesionales
                    <span class="unlimited">S/.100.00</span>
                </li>
                <!-- <li class="Oferta">Grupos de mas de 5:</li>
              <li class="Oferta">Estudiantes: <span>S/.75.00</span></li>
              <li class="Oferta">Profesionales:<span>S/.75.00</span></li> -->
                <!-- <li>Numero de cuenta</li>
              <li>Banco de la Nacion: <span> 04-529-428036</span></li> -->
            </ul>
            
            <div class="table-buy">
                <a href="inscripcion.html" class="precio-action">Inscribirse</a>
            </div>
        </div>
        
        <div class="precio-table recommended">
            <h3 class="precio-title">Agosto - Setiembre</h3>
            <!-- <div class="precio">S/.100</div> -->
            
            <ul class="table-list">
                <li>Estudiantes
                    <span class="unlimited">S/.80.00</span>
                </li>
                <li>Profesionales
                    <span class="unlimited">S/.120.00</span>
                </li>
                <!-- <li class="Oferta">Grupos de mas de 5:</li>
      <li class="Oferta">Estudiantes: <span>S/.90.00</span></li>
      <li class="Oferta">Profesionales:<span>S/.90.00</span></li> -->
                <!-- <li>Numero de cuenta</li>
      <li>Banco de la Nacion: <span> 04-529-428036</span></li> -->
            </ul>
            
            <div class="table-buy">
                <a href="inscripcion.html" class="precio-action" disabled>Inscribirse</a>
            </div>
        </div>
        
        <div class="precio-table">
            <h3 class="precio-title">Octubre-Noviembre</h3>
            <!-- <div class="precio">S/.120</div> -->
            
            <ul class="table-list">
                <li>Estudiantes
                    <span class="unlimited">S/.100.00</span>
                </li>
                <li>Profesionales
                    <span class="unlimited">S/.150.00</span>
                </li>
                <!-- <li class="Oferta">Grupos de mas de 5:</li>
      <li class="Oferta">Estudiantes: <span>S/.110.00</span></li>
      <li class="Oferta">Profesionales:<span>S/.110.00</span></li> -->
                <!-- <li>Numero de cuenta</li>
      <li>Banco de la Nacion: <span> 04-529-428036</span></li> -->
            </ul>
            
            <div class="table-buy">
                <a href="inscripcion.html" class="precio-action">Inscribirse</a>
            </div>
        </div>
    </div>
</div>
<!---FIN DE PRECIOS---->
<!--TURISMO-->
<div class="container">
    
    <h2 class="text-primary pb-3 text-center" id="turismo">Turismo en Tacna</h2>
    
    <div class="row text-center text-lg-left">
        
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna2.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna3.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna4.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna5.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna6.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna7.jpg" alt="">
            </a>
        </div>
        <!-- <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/turismotacna/tacna8.jpg" alt="">
        </a>
      </div> -->
        <!-- <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
        </a>
      </div> -->
    </div>

</div>
<!-- /.container -->
<!--FIN DE TURISMO-->
<br>
<div class="container-fluid">
    <div class="container">
        <section class="serv-grids">
            <div class="info-header mb-5">
                <h2 class="text-primary text-center pb-3">
                    ¿Cómo inscribirse?
                </h2>
            
            </div>
            <div class="row">
                
                <br>
                <div class="col-md-4 serv-grid1">
                    <div class="inner_grid">
                        <h3 class="text-center">Paso 1</h3>
                        <br>
                        <p class="text-center">Ingresar tus datos personales al siguiente <a href="inscripcion.html">link</a></p>
                        <!-- <a href="#" data-toggle="modal" data-target="#myModal">Read more</a> -->
                    </div>
                </div>
                <div class="col-md-4 serv-grid2">
                    <div class="inner_grid">
                        <h3 class="text-center">Paso 2</h3>
                        <br>
                        <p class="text-center">Ademas de tus datos personales debes subir donde salga el numero de tu voucher</p>
                        <!-- <a href="#" data-toggle="modal" data-target="#myModal">Read more</a> -->
                    </div>
                </div>
                <div class="col-md-4 serv-grid3">
                    <div class="inner_grid">
                        <h3 class="text-center">Paso 3</h3>
                        <br>
                        <p class="text-center">En menos de un dia te llegara la confirmación de tu inscripción al Congreso a tu correo</p>
                        <!-- <a href="#" data-toggle="modal" data-target="#myModal">Read more</a> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" style="background-color: #1a1a1a;color: white">
    
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
        
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
            
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">CIIS 2018</h6>
                <p>sdfsd</p>
            </div>
            <!-- Grid column -->
            
            <hr class="w-100 clearfix d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!-- Grid column -->
            
            <hr class="w-100 clearfix d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <p>
                    <a href="#ponentes">Ponentes</a>
                </p>
                <p>
                    <a href="#precios">Precios</a>
                </p>
                <p>
                    <a href="#talleres">Talleres</a>
                </p>
                <p>
                    <a href="#turismo">Turismo</a>
                </p>
            </div>
            
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contáctenos</h6>
                <p>
                    <i class="fa fa-home mr-3"></i>Sede los Granados - Avenida Miraflores S/N - Tacna</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>ciistacna@unjbg.edu.pe</p>
                <p>
                    <i class="fa fa-phone mr-3"></i>947 223842</p>
                <p>
                    <i class="fa fa-print mr-3"></i>+51 982531899</p>
            </div>
            <!-- Grid column -->
        
        </div>
        <!-- Footer links -->
        
        <hr>
        
        <!-- Grid row -->
        <div class="row d-flex align-items-center">
            
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">
                
                <!--Copyright-->
                <p class="text-center text-md-left">© 2018 Copyright:
                    <a href="https://mdbootstrap.com/bootstrap-tutorial/">
                        <strong>Escuela de Ingeniería en informática y Sistemas</strong>
                    </a>
                </p>
            
            </div>
            <!-- Grid column -->
            
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
                
                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            
            </div>
            <!-- Grid column -->
        
        </div>
        <!-- Grid row -->
    
    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="{{asset('js/frontend.min.js')}}"></script>

<!-- <script type="text/javascript" src="  https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.4/js/smooth-scroll.min.js"></script> -->
</body>

</html>