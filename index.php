<?php
    include_once 'plantillas/header1.php';
?>



    <!-- Instructions: Set your background image using the URL below. -->
    <header class="video">
        <div class="overlay"></div>
        <div class="intro-content">
            <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
            <div class="brand-name">Tejido social colombiano</div>
            <hr class="colored">
            <div class="brand-name-subtext">Todos podemos ayudar</div>
        </div>
        
        <div class="scroll-down page-scroll">
            <a class="btn page-scroll" href="#me"><i class="fa fa-angle-down"></i></a>
        </div>

    </header>
    <header>
        <section id="me">
            <div class="container wow fadeIn">
             <div class="row">
                <?php
                    if(!empty($_GET['msj'])) {
                        if ($_GET['msj'] == 3) {
                            echo "<h5 class='text-center'>Usuario o contraseña incorrecta</h5>";
                        }
                        if ($_GET['msj'] == 4) {
                            echo "<h5 class='text-center'>Debe iniciar sesión</h5>";
                    
                        }
                    } 
                ?>
             
                    <div class="row text-center">
                        
                        <h1>Saludo</h1>
                        <hr class="colored">
                        <p>En nombre de la Corporación Tejido Social Colombiano queremos darles la Bienvenida a nuestro sitio web, quiero además  agradecer a cada uno de nuestros benefactores por haberse vinculado por medio de sus aportes, donaciones y ayudas; de la misma manera también agradecemos , el apoyo y esfuerzo de todos y cada uno de nuestros voluntarios, de los voluntarios de las organizaciones sociales quienes con su ayuda y decidida entrega hacen posible que alcancemos una mejor sociedad; también gracias a todas  nuestras  Empresas donantes, a los Médicos, Médicos Especialistas, Profesionales de la Salud, y en general a Entidades que nos apoyan y ayudan, pues son ustedes  quienes unidos como un gran tejido social, permiten que nuestra Corporación pueda alcanzar su misión, que se orienta no solo en mejorar la calidad de vida denuestros Corporados y sus familias, sino prioritaria mente en que logremos diseñar y ejecutar acciones de ayuda social y humanitaria, las cuales desarrollamos en comunidades vulnerables y en alto riesgo, que se ubican a lo largo y ancho del país,  pues hemos entendido que solo así y  entre todos lograremos  seguir aportando nuestro granito de arena en la construcción de una Colombia Mejor.</p>
                       
                    </div>
             </div>
            </div>
        </section>
       

    <section id="about">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn">
                    <h1> ¿ Quienes Somos ? </h1>
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center">
                <div class="row text-center" data-wow-delay=".2s">
                    <div class="list-group-item">
                        <i class="fa fa-eye fa-4x"></i>
                        <h3>Nuestra Visión</h3>
                        <p>Ser una organización sostenible, ágil, innovadora, que responda con proactividad a los desafíos que se le planteen, desarrollando proyectos novedosos fundamentados en principios universales, que mejoren la calidad de vida de sus Corporados y la de sus familias, que además aúne esfuerzos por ayudar a quienes más lo necesitan; comprometida en consolidar al año 2.020 un liderazgo y reconocimiento nacional, como entidad que promueve el bienestar y el fortalecimiento de la familia como núcleo fundamental para el desarrollo de nuestra sociedad colombiana.</p>
                    </div>
                </div>
                <div class="row text-center" data-wow-delay=".4s">
                    <div class="list-group-item">
                        <i class="fa fa-edit fa-4x"></i>
                        <h3>Nuestra Misión</h3>
                        <p>Ser una organización sostenible, ágil, innovadora, que responda con proactividad a los desafíos que se le planteen, desarrollando proyectos novedosos fundamentados en principios universales, que mejoren la calidad de vida de sus Corporados y la de sus familias, que además aúne esfuerzos por ayudar a quienes más lo necesitan. </p> <p>comprometida en consolidar al año 2.020 un liderazgo y reconocimiento nacional, como entidad que promueve el bienestar y el fortalecimiento de la familia como núcleo fundamental para el desarrollo de nuestra sociedad colombiana.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="bg-gray">
        <div class="container text-center wow fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Nuestro Equipo</h2>
                    <p>Nuestro pequeño equipo de trabajo que  da el 100% por una colombia mejor..</p>
                    <hr class="colored">
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="about-carousel">
                        <div class="item">
                            <img src="assets/img/people/01.png" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>Pedro Caycedo</h3>
                                <hr class="colored">
                                <p>Presidente Ejecutivo</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="https://www.facebook.com"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/people/02.jpg" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>Esposa</h3>
                                <hr class="colored">
                                <p>Cargo</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/people/3.jpg" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>Margarita</h3>
                                <hr class="colored">
                                <p>Cargo</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/people/4.jpg" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>empleada(o)</h3>
                                <hr class="colored">
                                <p>cargo</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/people/d.jpeg" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>Henry Rivas</h3>
                                <hr class="colored">
                                <p>Desarrolador Web</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class="cta-quote" style="background-image: url('assets/img/bg-aside.jpg');">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <span class="quote">CONSTRUIMOS <span class="text-primary">UN GRAN TEJIDO SOCIAL</span> QUE PERMITE LA AYUDA A LOS MAS NECESITADOS Y <span class="text-primary">MEJORA</span> <span class="text-primary"> CALIDAD DE VIDA </span> DE NUESTROS DONANTES .</span>
                    <hr class=" colored">
                    <a class="btn btn-outline-light page-scroll" href="#contact">Escribenos</a>
                </div>
            </div>
        </div>
    </aside>
    <section id="process" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn">
                    <h2>Nuestro Beneficios Como Donante</h2>
                    <hr class="colored">
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-clipboard"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Planes</h3>
                            <ul>
                                <li>Aporte Individual</li>
                                <li>Aporte Premier</li>
                                <li>Aporte Elite</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Consultas Medicas</h3>
                            <ul>
                                <li>Acceso directo a Médicos Especialistas. </li>
                                <li>Confort Hospitalario.</li>
                                <li>Máxima Atención</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Otros beneficios</h3>
                            <ul>
                                <li>Evitar la complejidad de la EPS</li>
                                <li></li>
                                <li>Collect UX data</li>
                                <li>Quarterly maintenence</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="especialidades" class="">
        <div class="container text-center wow fadeIn">
            <h2>Directorio Médico</h2>
            <hr class="colored">
            <p>Encuentre especialistas muy cerca de usted. Para nuestros beneficiarios y Donantes.</p>
            <br>
            <form action="buscar.php" method="post">
                <div class="col-md-4">
                    <select class="btn btn-info" name="especialidades">
                        <option value="" selected="selected">Seleccione la especialidad</option>    
                        <option value="Cardiologia">Cardiología</option>
                        <option value="Pediatria">Pediatría</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="btn btn-info" name="ubicacion">
                        <option value="" selected="selected">Seleccione la ubicación</option>    
                        <option value="Bogotá">Bogotá</option>
                        <option value="Manizales">Manizales</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                </div>
            </form>
            <br><br>
            
        </div>
    </section>
    <section class="portfolio-carousel wow fadeIn">
        <div class="item" style="background-image: url('assets/img/portfolio/bg-1.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/STAR FAMILY.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Starfamily</span>
                            <span class="project-description">Cientos de profesionales y Especialistas de la Salud, al alcance de todos.</span>
                            <hr class="colored">
                            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light">Ver Detalles <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/STAR FAMILY.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-2.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/STAR FAMILY.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">StarFamily</span>
                            <span class="project-description">Por una Colombia mejor</span>
                            <hr class="colored">
                            <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light">Ver Detalles <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/STAR FAMILY.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-3.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/STAR FAMILY.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">STARFAMILY</span>
                            <span class="project-description">JUNTOS POR UNA COLOMBIA MEJOR</span>
                            <hr class="colored">
                            <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light">Ver Detalles <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/STAR FAMILY.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-4.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/STAR FAMILY.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">STARFAMILY</span>
                            <span class="project-description">CALIDAD PARA NUESTRA COLOMBIA</span>
                            <hr class="colored">
                            <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light">Ver Detalles <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/STAR FAMILY.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container text-center wow fadeIn">
            <h2>Portafolio</h2>
            <hr class="colored">
            <p>Nuestro equipo en ayuda de la humanidad de Colombia.</p>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">
                            <li>
                                <span class="filter active" data-filter="identity graphic logo web">All</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="identity">Identity</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="graphic">Graphic</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="web">Web</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist">
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Generic Inc.</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Brands</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Excellence</a>
                                        <span class="text-category">Poster Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">YouTV</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Office Supplies</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Fooder</a>
                                        <span class="text-category">Mobile App</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Mountain Tea</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Checkmark</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Demish</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">OneRepublic</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/5.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Postable</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Simpli Nota</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="testimonials bg-gray">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="testimonials-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="lead">"El programa Starfamily fue diseñado para mejorar el 98% de las atenciones medicas de nuestros donantes y voluntarios"</p>
                                    <hr class="colored">
                                    <p class="quote">El programa se orientó para que fuera obsequiado a nuestros Donantes y Voluntarios, con él, ahora si es posible que en ese 98% de las atenciones medicas que serán  requeridas en nuestra vida, podamos ser atendidos directamente por Médicos Especialistas. </p>
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <span class="name">Pedro Caycedo</span>
                                            <p class="small">Presidente Ejecutivo</p>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="lead">"Working with Vitality was both a valuable and rewarding experience."</p>
                                    <hr class="colored">
                                    <p class="quote">adasdasdsad</p>
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="assets/img/testimonials/1.jpg" class="img-circle img-responsive" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <span class="name">Pedro Caycedo</span>
                                            <p class="small">Presidente Ejecutivo</p>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section> 

    <section id="pricing" class="pricing" style="background-image: url('assets/img/bg-pricing.jpg')">
        <div class="container wow fadeIn">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Nuestro planes</h2>
                    <hr class="colored">
                    <p>Vinculate como uno de nuestros Donantes y recibes sin costo Revolucionario programa de acceso directo a medicos especialistas.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3>Individual</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>120.000</span> / Año</div>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Donación Básica Individual:</strong> Especialmente diseñado para que Empresas, Asociaciones, Cooperativas, y diferentes entidades, pudiesen vincularse a nuestros programas de Responsabilidad Social y recibir como beneficios el Programa StarFamily para cada uno de sus Empleados, Asociados y/o Cooperados.
                            </li>
                           <li class="list-group-item"><strong>Vincunlacion: </strong> Individual
                           </li>
                           
                        </ul>
                    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3>Familia Premier</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>480.000</span> / Año</div>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Donación Premier: </strong> Especialmente diseñado para que Personas solas y Familias de forma directa puedan recibir nuestros beneficios gracias a sus Aportes y Donaciones, así como para que las  Empresas, Asociaciones.y  Cooperativas también puedan impactar a las familias de sus empleados, cooperados y asociados y así todos puedan recibir los privilegios del Programa StarFamily</li>
                         
                            <li class="list-group-item"><strong>Vinculación: </strong> Individual y/o Familiar</li>
                        </ul>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3>Familia Elite</h3>
                        <hr class="colored">
                        <div class="price"><span class="number"><sup>$</sup>600.000</span> / Año</div>
                        <ul class="list-group">
                            <li class="list-group-item"><strong> Aporte Donación Elite: </strong>Especialmente diseñado para que Personas solas y Familias de forma directa puedan recibir nuestros beneficios gracias a sus Aportes y Donaciones, incluyendo hasta cuatro personas mayores; así como para que las  Empresas, Asociaciones.y  Cooperativas también puedan impactar a las familias de sus empleados, cooperados y asociados y así todos puedan recibir los privilegios del Programa StarFamily.</li>
                            <li class="list-group-item"><strong>Vinculación: </strong> Familiar </li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contactanos</h2>
                    <hr class="colored">
                    <p>Por favor, Comenta, escribenos sobre tu experiencia o dudas que tengas y nosotros nos pondremos en contacto contigo.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor introduce tu nombre">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo @ Electronico</label>
                                <input type="email" class="form-control" placeholder="Correo Electronico" id="email" required data-validation-required-message="Por favor Introduce un Correo electronico Valido.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Numero Telefonico</label>
                                <input type="tel" class="form-control" placeholder="Numero Telefonico" id="phone" required data-validation-required-message="Por favor introduce tu numero Telefonico.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por Favor Introduce tu Mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" style="background-image: url('assets/img/bg-footer.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i>Telefonos</h4>
                    <p>PBX : 57-1-7021870 </p>
                    <p> +57 315 345 90 35 </p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> Visitanos</h4>
                    <p>Bogotá, Colombia
                        <br>Carrera 15 # 96-45 of. 202</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Correo</h4>
                    <p><a href="mailto:mail@example.com">info@tejidosocialcolombiano.org</a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2018 Tejido Social Colombiano</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Example Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-1.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-2.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-4.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="style-switcher" class="close-style-switcher animated bounce">
        <!--Panel Button -->
        <a class="panel-button"><i class="fa fa-gear"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4>Theme Colors</h4>
            <a title="vitality-red" class="switcher red-bg"></a>
            <a title="vitality-orange" class="switcher orange-bg"></a>
            <a title="vitality-yellow" class="switcher yellow-bg"></a>
            <a title="vitality-green" class="switcher green-bg"></a>
            <a title="vitality-turquoise" class="switcher turquoise-bg"></a>
            <a title="vitality-aqua" class="switcher aqua-bg"></a>
            <a title="vitality-blue" class="switcher blue-bg"></a>
            <a title="vitality-purple" class="switcher purple-bg"></a>
            <a title="vitality-pink" class="switcher pink-bg"></a>
            <a title="vitality-tan" class="switcher tan-bg"></a>
        </div>
        <div class="segment">
            <a href="index.php">
                <small>Ir a la página principal</small>
            </a>
        </div>
    </div>
    <!-- End Style Switcher -->
    <!-- Core Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugin Scripts -->
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/classie.js"></script>
    <script src="assets/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/background/core.js"></script>
    <script src="assets/js/plugins/background/transition.js"></script>
    <script src="assets/js/plugins/background/background.js"></script>
    <script src="assets/js/plugins/jquery.mixitup.js"></script>
    <script src="assets/js/plugins/wow/wow.min.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation.js"></script>
    <!-- Vitality Theme Scripts -->
    <script src="assets/js/vitality.js"></script>
    <!-- Style Switcher Scripts - Demo Purposes Only! -->
    <script src="assets/demo/style.switcher.js"></script>
</body>

</html>
