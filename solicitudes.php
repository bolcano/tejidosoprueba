<?php
    session_start();
    include_once 'plantillas/header2.php';
    $usuario = $_SESSION['usuario'];

    if ($_SESSION['usuario'] = $usuario) {
?>

<header class="video">
    <div class="overlay"></div>
    <div class="intro-content">
        <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
        <div class="brand-name">Tejido social colombiano</div>
        <hr class="colored">
        <div class="brand-name-subtext">Ver Solicitudes</div>
    </div>
    <div class="scroll-down page-scroll">
        <a class="btn page-scroll" href="#solicitudes"><i class="fa fa-angle-down"></i></a>
    </div>
</header>
<section id="solicitudes">
    <div class="container text-center wow fadeIn">
        <h2>Ver Solicitudes</h2>
        <hr class="colored">
        <p>Aqui podrás consultar cada una de las solicitudes de los planes que ha realizado.</p>
        <br><br>
        <div class="col-md-4 col-md-offset-4">
            <form action="solicitud.php" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="correo">Correo</label>
                    <input type="email" class="form-control" placeholder="Ingrese su correo" id="inputDefault" name="correo">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="plan">Escoja el Plan</label>
                    <select class="form-control" name="plan">
                        <option value="B">Básico</option>
                        <option value="P">Premier</option>
                        <option value="E">Élite</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</section>

<?php
    } 

    else {
        header('Location: index.php?msj=4');
    }

    include_once 'plantillas/footer.php';
?>