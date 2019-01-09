<?php
    session_start();
    include_once 'plantillas/header.php';
    $usuario = $_SESSION['usuario'];

    if ($_SESSION['usuario'] = $usuario) {
?>

<header class="video">
    <div class="overlay"></div>
    <div class="intro-content">
        <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
        <div class="brand-name">Tejido social colombiano</div>
        <hr class="colored">
        <div class="brand-name-subtext">Iniciaste sesión como Administrador</div>
    </div>
    <div class="scroll-down page-scroll">
        <a class="btn page-scroll" href="#work"><i class="fa fa-angle-down"></i></a>
    </div>
</header>

<section id="work" class="bg-gray">
    <div class="container text-center wow fadeIn">
        <h2>Insertar Médicos</h2>
        <hr class="colored">
        <p>Insertar médicos ordenados por especialidad y ubicación.</p>
        <br>
        <div class="col-md-4 col-md-offset-4">
            <form action="db/insertar-m.php" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="especialidad">Especialidad</label>
                    <input type="text" class="form-control" placeholder="Ingresa la especialidad" id="inputDefault" name="especialidad">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="medico">Médico</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre del médico" id="inputDefault" name="medico">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Ubicación">Ubicación</label>
                    <select class="form-control" name="ubicacion">
                        <option value="Bogota">Bogotá</option>
                        <option value="Manizales">Manizales</option>
                    </select>
                </div>
                <?php
                    if(!empty($_GET['msj'])) {
                        if ($_GET['msj'] == 5) {
                            echo "<h5 class='text-center'>Datos insertados correctamente</h5>";
                        }
                        if ($_GET['msj'] == 6) {
                            echo "<h5 class='text-center'>No se ha podido completar su solicitud</h5>";
                        }
                    } 
                ?>
                <input class="btn btn-primary" type="submit" value="Insertar">
            </form>
        </div>
    </div>
</section>

<section id="work" class="bg-gray">
    <div class="container text-center wow fadeIn">
        <div class="col-md-4">
            <h3>Ver registros en el Plan Básico</h3>
            <br><br>
            <a class="btn btn-primary" href="#">Ver</a>
        </div>
        <div class="col-md-4">
            <h3>Ver registros en el Plan Básico</h3>
            <br><br>
            <a class="btn btn-primary" href="#">Ver</a>
        </div>
        <div class="col-md-4">
            <h3>Ver registros en el Plan Básico</h3>
            <br><br>
            <a class="btn btn-primary" href="#">Ver</a>
        </div>
        
    </div>
</section>


<?php
    } 

    else {
    echo header ('Location: index.php?msj == 4');
   

    include_once 'plantillas/footer.php';
    }
?>