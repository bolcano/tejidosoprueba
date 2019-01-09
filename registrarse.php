<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tejido social Colombiano</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/background.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/animate.css" rel="stylesheet" type="text/css">
    <link id="changeable-colors" rel="stylesheet" href="assets/css/vitality-orange.css">
    <link href="assets/demo/style-switcher.css" rel="stylesheet">
   
</head>

<body id="page-top">
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/prueba/">
                    <img src="assets/img/logo.png" class="img-responsive" alt="">
                </a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                      <a <button type="button" class="page-scroll"  data-toggle="collapse" data-target="#loginModal">Ingresar (Admin)</button> </a>
                    </li>
                    <li>
                      <a <button type="button" class="page-scroll"  data-toggle="collapse" data-target="#loginModal1">Ingresar (Invitado)</button> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="modal" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Inicio de Sesión (Admin)</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
              <form class="form-signin" action="login.php" method="post">
          
               <div class="form-label-group">
                    <label for="usuario">Usuario</label>
                  <input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus name="usuario">
                </div>
                <div class="form-label-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
                <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                    <div>
                        <a href="registrarse.php"><button type="button" class="btn btn-lg btn-primary btn-block">¿No eres usuario? Registrate</button></a>
                    </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2018-2019</p>
              </form>
          
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="loginModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Inicio de Sesión (Invitado)</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
              <form class="form-signin" action="login-u.php" method="post">
          
               <div class="form-label-group">
                    <label for="usuario">Usuario</label>
                  <input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus name="usuario">
                </div>
                <div class="form-label-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
                <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                    <div>
                        <a href="registrarse.php"><button type="button" class="btn btn-lg btn-primary btn-block">¿No eres usuario? Registrate</button></a>
                    </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2018-2019</p>
              </form>
          
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>




    <!-- Instructions: Set your background image using the URL below. -->
    <header class="video">
        <div class="overlay"></div>
        <div class="intro-content">
            <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
            <div class="brand-name">Tejido social colombiano</div>
            <hr class="colored">
            <div class="brand-name-subtext">Registrarse</div>
        </div>
        <div class="scroll-down page-scroll">
            <a class="btn page-scroll" href="#me"><i class="fa fa-angle-down"></i></a>
        </div>

    </header>
    <header>
        <section id="me">
            <div class="container wow fadeIn">
             <div class="row text-center">
                
                    <div class="container wow fadeIn">
                        <h1>Registrarse</h1>
                        <hr class="colored">
                        <form action="db/insertar-u.php" method="post">
                            <div class="form-group">
                                <label class="col-form-label" for="nombre">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="inputDefault" name="nombre">
                            </div> 
                            <div class="form-group">
                                <label class="col-form-label" for="apellido">Apellido</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu apellido" id="inputDefault" name="apellido">
                            </div>    
                            <div class="form-group">
                                <label class="col-form-label" for="f_nac">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" placeholder="Ingresa tu fecha de nacimiento" id="inputDefault" name="f_nac">
                            </div> 
                            <div class="form-group">
                                <label class="col-form-label" for="correo">Correo</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu correo" id="inputDefault" name="correo">
                            </div>  
                            <div class="form-group">
                                <label class="col-form-label" for="usuario">Usuario</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu usuario" id="inputDefault" name="usuario">
                            </div>  
                            <div class="form-group">
                                <label class="col-form-label" for="password">Contraseña</label>
                                <input type="password" class="form-control" placeholder="Ingresa tu contraseña" id="inputDefault" name="password">  
                            </div> 
                            <div class="form-group">
                                <label class="col-form-label" for="ubicacion">Ubicación</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu ubicación" id="inputDefault" name="ubicacion">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="clave">Clave de Ingreso</label>
                                <input type="password" class="form-control" placeholder="Deje en blanco si no la posee" id="inputDefault" name="clave">  
                            </div> 
                            <?php
                                if(!empty($_GET['msj'])) {
                                    if ($_GET['msj'] == 1) {
                                        echo "<h5>Usted se ha registrado exitosamente</h5>";
                                    }
                                    if ($_GET['msj'] == 2) {
                                        echo "<h5>No se ha podido procesar su soliciud</h5>";
                                    }
                                } 
                            ?>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" id="inputDefault" value="Registrarse" style="padding-bottom: 30px">
                            </div> 
                        </form>
                       
                    </div>
             </div>
            </div>
        </section>

     
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
