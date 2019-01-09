<?php
    require_once 'db/conexion.php';
?>

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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="me">
                        <a class="page-scroll" href="index.php#me">Bienvenida</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#about">Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#work">Directorio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#pricing">Planes</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#contact">Contactanos</a>
                    </li> -->
                    <li>
                      <a button type="button" class="page-scroll"  data-toggle="collapse" data-target="#loginModal">Ingresar (Admin) </a>
                    </li>
                    <li>
                      <a button type="button" class="page-scroll"  data-toggle="collapse" data-target="#loginModal1">Ingresar (Beneficiario) </a>
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
                  <h5 class="modal-title">Administrador</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
              <form class="form-signin" action="login.php" method="post">
          
               <div class="form-label-group">
                    <label for="usuario1">Usuario</label>
                  <input type="text" id="usuario1" class="form-control" placeholder="Usuario1" required autofocus name="usuario1">
                </div>
                <div class="form-label-group">
                    <label for="password1">Contraseña</label>
                    <input type="password1" id="password1" class="form-control" placeholder="Contraseña1" name="password1" required>
                </div>
                <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                    <div>
                        <a href="registrarse.php"><button type="button" class="btn btn-lg btn-primary btn-block">¿No eres usuario? Registrate</button></a>
                    </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2019</p>
              </form>
          
                </div>
                <div class="modal-footer">
                   <input type="button" value="Cerrar ventana" onClick="self.close();" onKeyPress="self.close();" />
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  -->
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

          <header class="video">
                <div class="overlay"></div>
                <div class="intro-content">
                    <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
                    <div class="brand-name">Tejido social colombiano</div>
                    <hr class="colored">
                    <div class="brand-name-subtext">Resultados de búsqueda</div>
                </div>
                
                <div class="scroll-down page-scroll">
                    <a class="btn page-scroll" href="#table"><i class="fa fa-angle-down"></i></a>
                </div>
        </header>


<?php
    
    if (!empty($_POST)) {
        $especialidad = isset($_POST['especialidades']) ? $_POST['especialidades'] : '';
        $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
        buscar($especialidad, $ubicacion);
    }

    function buscar($especialidad) {
        $especialidad = isset($_POST['especialidades']) ? $_POST['especialidades'] : '';
        $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
        $sql = "SELECT * FROM especialidades WHERE ubicacion='{$ubicacion}'";
        $resultado = mysqli_query(conexion(), $sql);

        if(mysqli_num_rows($resultado)) {
            echo "<div class='container'>
                    <br><br>
                    <table id='table' class='table table-hover'>";
                    echo "<tr>
                            <th>ESPECIALIDAD</th>
                            <th>MÉDICO</th>
                            <th>UBICACIÓN</th>
                            <th>DIRECCIÓN</th>
                            <th>TELÉFONO</th>
                        </tr>";

            while($registros = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>$registros[especialidad]</td>
                        <td>$registros[medico]</td>
                        <td>$registros[ubicacion]</td>
                        <td>$registros[direccion]</td>
                        <td>$registros[telefono]</td>
                    </tr>
                </div>";  
            }
            echo "</table>";
        }
    }

?>


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


<?php
    include_once 'plantillas/footer.php';
?>