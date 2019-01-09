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
        <div class="brand-name-subtext">Iniciaste sesión como Invitado</div>
    </div>
    <div class="scroll-down page-scroll">
        <a class="btn page-scroll" href="#planes"><i class="fa fa-angle-down"></i></a>
    </div>
</header>
<section id="planes" class="">
        <div class="container text-center wow fadeIn">
            <h2>Plan Básico</h2>
            <hr class="colored">
            <p>Especialmente diseñado para que Empresas, Asociaciones, Cooperativas, y diferentes entidades, pudiesen vincularse a nuestros programas de Responsabilidad Social y recibir como beneficios el Programa StarFamily para cada uno de sus Empleados, Asociados y/o Cooperados. 
                <br><br>
                <strong>Vinculación:</strong> Individual
                <br><br>
                <strong>Precio:</strong> $ 360.000/año - $ 198.000/semestral - $ 105.000/trimestrales - $ 38.000 /mensuales
                <br><br>
                <a href="plan-basico.php" class="btn btn-primary">¡Solicítalo ahora!</a>
            </p>
            <br>
        </div>
        <br><br>
        <div class="container text-center wow fadeIn">
            <h2>Plan Premier</h2>
            <hr class="colored">
            <p>Especialmente diseñado para que Personas solas y Familias de forma directa puedan recibir nuestros beneficios gracias a sus Aportes y Donaciones, así como para que las  Empresas, Asociaciones.y  Cooperativas también puedan impactar a las familias de sus empleados, cooperados y asociados y así todos puedan recibir los privilegios del   Programa StarFamily. 
                <br><br>
                <strong>Vinculación:</strong> Individual y/o Familiar
                <br><br>
                <strong>Precio:</strong> $ 480.000/año - $ 258.000/semestral - $ 135.000/trimestral - $ 48.000 /mensuales
                <br><br>
                <a href="plan-premier.php" class="btn btn-primary">¡Solicítalo ahora!</a>
            </p>
            <br>
        </div>
        <br><br>
        <div class="container text-center wow fadeIn">
            <h2>Plan Élite</h2>
            <hr class="colored">
            <p>Especialmente diseñado para que Personas solas y Familias de forma directa puedan recibir nuestros beneficios gracias a sus Aportes y Donaciones, incluyendo hasta cuatro personas mayores; así como para que las  Empresas, Asociaciones.y  Cooperativas también puedan impactar a las familias de sus empleados, cooperados y asociados y así todos puedan recibir los privilegios del Programa StarFamily.
                <br><br>
                <strong>Vinculación:</strong> Familiar
                <br><br>
                <strong>Precio:</strong> $ 600.000/año - $ 318.000/semestral - $ 165.000/trimestral - $ 58.000 /mensuales <br> $ 24.000 Cada agregado
                <br><br>
                <a href="plan-elite.php" class="btn btn-primary">¡Solicítalo ahora!</a>
            </p>
            <br>
        </div>
    </section>

<?php
    } 

    else {
        header('Location: index.php?msj=4');
    }

    include_once 'plantillas/footer.php';
?>