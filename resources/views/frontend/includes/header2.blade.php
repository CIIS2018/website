<!--inico slider-->
<div id="carouselCiis" class="carousel slide mt-5 pt-4 "  data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselCiis" data-slide-to="0" class="active"></li>
        <li data-target="#carouselCiis" data-slide-to="1"></li>
        <li data-target="#carouselCiis" data-slide-to="2"></li>
        <li data-target="#carouselCiis" data-slide-to="3"></li>
        <li data-target="#carouselCiis" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../images/banner/dos.png" alt="First slide">

            <div class="carousel-caption d-md-block">
                <div class="d-flex align-items-center">
                    <span>
                        <h1 class="header__titulo titulo--white">
                            <span class="titulo--blue"><b>XIX CONGRESO INTERNACIONAL</b></span>
                            <br/> DE INFORMÁTICA Y SISTEMAS</h1>
                        <h2 class="header__titulo titulo--white" style="font-size:12pt;font-weight: 500">Gestión del conocimiento e innovación tecnológica</h2>
                        <h3 class="header__titulo titulo--white" style="font-size:13pt;font-weight: 500">Del <b>12</b> al <b>16</b> de <b>noviembre</b></h3>
                        <li class="header__boton">
                            <a class="header__boton--principal" href="{{ route('frontend.inscription') }}">Inscripciones</a>
                        </li>
                    </span>
                </div>         
            </div>
        </div>
        
        
        <div class="carousel-item ">
            <img class="d-block w-100 " src="../images/Slider_v4(3).jpg" alt="Second slide">

            <div class="carousel-caption carousel-caption2 d-md-block">
               <div class="d-flex align-items-center">
                    <span>
                        {{-- <h1 class="header__titulo titulo--white">
                            <span class="titulo--blue">XV</span>
                            <br/>Postmaster<br/></h1>
                        <h2 class="header__titulo titulo--white" style="font-size:12pt;font-weight: 500">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN</h2>
                       <br/><br/>
                        
                        <h3 class="header__titulo titulo--white" style="font-size:12pt;font-weight: 500">Del 12 al 16 de noviembre </h3>
                        <li class="header__boton">
                            <a class="header__boton--principal" href="{{ route('frontend.postmaster') }}">Más información</a>
                        </li> --}}
                        
                    </span>
                </div>        
            </div>
        </div>

        <div class="carousel-item ">
            <img class="d-block w-100" src="../images/banner/banner_talleres_v2.jpeg" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <div class="d-flex align-items-center">
                </div>        
            </div>
        </div>
        
        <div class="carousel-item ">
            <img class="d-block w-100" src="../images/banner/banner_concursos.jpeg" alt="Fourth slide">
            <div class="carousel-caption d-md-block">
                <div class="d-flex align-items-center">
                </div>        
            </div>
        </div>
        
        <div class="carousel-item ">
            <img class="d-block w-100" src="../images/banner/banner_tacna.jpeg" alt="fifth slide">
            <div class="carousel-caption d-md-block">
                <div class="d-flex align-items-center">
                </div>        
            </div>
        </div>
        
<!--
        <div class="carousel-item">
            <img class="d-block w-100" src="../images/banner/dos.png" alt="Second slide">

            <div class="carousel-caption d-md-block">
               <div class="d-flex align-items-center">
                    <span>
                        <h1 class="header__titulo titulo--blue">
                        <span class="titulo--white">ORGANIZADO POR</span>
                        <br/>LA ESCUELA PROFESIONAL<br/> DE INFORMÁTICA Y SISTEMAS</h1>
                        <h2 class="header__titulo titulo--white" style="font-size:12pt;font-weight: 500">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN</h2>
                        <br/><br/>
                    </span>
                </div>        
            </div>
        </div>
-->

        <!-- <div class="carousel-item ">
            <img class="d-block w-100" src="../images/banner/dos.png" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <div class="d-flex align-items-center">
                    <span>
                        <h1 class="header__titulo titulo--white">
                            <span class="titulo--blue">PONENTES INTERNACIONALES,</span>
                            <br/> CONCURSOS, TALLERES</h1>
                        <h2 class="header__titulo titulo--white" style="font-size:12pt;font-weight: 500">FERIA TECNOLÓGICA Y MÁS</h2><br/><br/>
                    </span>
                </div>        
            </div>
        </div> -->

    </div>
    <a class="carousel-control-prev" href="#carouselCiis" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselCiis" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--fin slider-->

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
                <h2 class="seccion__titulo text-center">
                    <span class="titulo--blue">Conoce</span> un poco más del
                    <span class="titulo--blue">evento</span>
                </h2>
                <p></p>
            </article>
            <div class="col-sm-12 col-md-6 mb-2 d-flex align-items-center ">
                <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6bP6ouor0AY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>
            <br>
            <div class="col-sm-12 col-md-6 mb-2 d-flex align-items-center ">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/QZh3prsvEG4" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="container-fluid beneficio mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="images/calendario.png" class="img-fluid rounded mt-4" style="width:50px;float: left;">
                <h4 class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Fecha</h4>
                <h5 class="text-center text-white" style="font-size:11pt">del 12 al 16 de noviembre</h5>

            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="images/reloj(1).png" class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4  class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Hora de inicio</h4>
                    <h5 class="text-center text-white" style="font-size:11pt">9:00 am</h5>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="images/ponente-en-una-conferencia(1).png" class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4  class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Expositores</h4>
                    <h5 class="text-center text-white" style="font-size:11pt">Nacionales e internacionales</h5>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
                <img src="images/aplausos(2).png" class="img-fluid rounded mt-4" style="width:50px;float: left;">
                <h4  class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Tours y más</h4>
                <h5 class="text-center text-white" style="font-size:11pt">Disfruta Tacna</h5>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container">
            <h2 class="text-primary pb-3 text-center a_title">Cuenta regresiva</h2>
            <h3 class="lead pb-3 mt-3 text-center color-texto">Cada vez falta menos para el inicio de este gran evento</h3>
            <section id="countdown">
                    <div>
                      <div class="numbers">
                        <div class="timer"><!--set in js--></div>
                      </div>
                    </div>
            </section>
    </div>
</section>

<section class="container-fluid mb-3 mt-5">
    <div class="container">
            <h3 class="text-primary pb-3 text-center a_title">Horario de ponentes</h3>
        <div class="row">
                
                <div class="col-12 m-3">
                        <a class="example-image-link" href="../images/cronograma.png" data-lightbox="example-set" data-title="">
                            <img class="example-image img-fluid " src="../images/cronograma.png" alt=""/>
                        </a>
                    </div>
        </div>
    </div>
</section>


<section class="container-fluid beneficio mt-3">
    <div class="container pt-3 pb-4">
        <h2 class="text-center text-white mt-3 a_title">Beneficios de los participantes</h2>
        <hr>
        <div class="row">
            <div class="padding-card col-lg-3 col-sm-6 mb-3">
                <div class="card h-100 rounded a_small Blurb">
                  <div class="card-body text-center">
                      <img src="https://image.flaticon.com/icons/svg/201/201576.svg" width="50px">
                    <h1 class="lead pb-3 mt-3  color-texto">Material de apuntes</h1>
                  </div>
                </div>
            </div>
            {{-- <div class="padding-card col-lg-3 col-sm-6 mb-3">
              <div class="card h-100 rounded a_small Blurb">
                <div class="card-body text-center">
                  <img src="https://image.flaticon.com/icons/svg/326/326935.svg" class="img-fluid rounded" style="width:50px;">
                  <h1 class="lead pb-3 mt-3  color-texto">Acceso a eventos académicos</h1>
                </div>
              </div>
            </div> --}}
      
            <div class="padding-card col-lg-3 col-sm-6 mb-3">
              <div class="card h-100 rounded a_small Blurb">
                <div class="card-body text-center">
                    <img src="https://image.flaticon.com/icons/svg/201/201553.svg" width="50px">
                  <h1 class="lead pb-3 mt-3  color-texto">Acceso a ponencias magistrales</h1>
                  {{-- <a class="btn btn-outline-primary get" target="_blank" href="https://coinmarketcap.com/currencies/ripple/">
                                  Test
                              </a> --}}
                </div>
              </div>
            </div>
      
            <div class="padding-card col-lg-3 col-sm-6 mb-3">
              <div class="card h-100 rounded a_small Blurb">
                <div class="card-body text-center">
                    <img src="https://image.flaticon.com/icons/svg/148/148991.svg" width="50px">
                  <h1 class="lead pb-3 mt-3 color-texto">Carpeta de trabajo</h1>
                  {{-- <a class="btn btn-outline-primary get" target="_blank" href="https://coinmarketcap.com/currencies/dash/">
                                  Test
                              </a> --}}
                </div>
              </div>
            </div>
      
            <div class="padding-card col-lg-3 col-sm-6 mb-3">
              <div class="card h-100 rounded a_small Blurb">
                <div class="card-body text-center">
                    <img src="https://image.flaticon.com/icons/svg/236/236839.svg" width="50px">
                  <h1 class="lead pb-3 mt-3 mt-3 color-texto">Certificado de participación</h1>
                  {{-- <a class="btn btn-outline-primary get" target="_blank" href="https://coinmarketcap.com/currencies/ethereum/">
                                  Test
                              </a> --}}
                </div>
              </div>
            </div>

            <div class="padding-card col-lg-3 col-sm-6 mb-3">
                <div class="card h-100 rounded a_small Blurb">
                  <div class="card-body text-center">

                      <img src="https://www.freeiconspng.com/uploads/school-bag-icon-1.png" width="50px">
                    <h1 class="lead pb-3 mt-3  color-texto">Morral CIIS</h1>

                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="https://m.me/169105266515410" class="float xd" target="__blank">
    <i class="fab fa-facebook-messenger my-float fa-2x"></i>
</a>
<div class="label-container">
    <div class="label-text">Envía tus dudas por aquí</div>
    <i class="fa fa-play label-arrow"></i>
</div>