<?php 
    session_start();
    include_once 'plantillas/header2.php';
    $usuario = $_SESSION['usuario'];

    if ($_SESSION['usuario'] = $usuario) {
?>

<section id="work" class="bg-gray">
    <div class="container text-center wow fadeIn">
        <a class="btn btn-info" href="inicio-u.php">Volver</a>
        <h2>Registro de Donación</h2>
        <hr class="colored">
        <p>Insertar los datos del donante y del beneficiario.</p>
        <br>
        <div class="col-md-6 col-md-offset-3">
            <form action="db/insertar-premier.php" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="fecha">Fecha</label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha" id="inputDefault" name="fecha">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" placeholder="Ingrese la ciudad" id="inputDefault" name="ciudad">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="departamento">Departamento</label>
                    <input type="text" class="form-control" placeholder="Ingrese el departamento" id="inputDefault" name="departamento">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre" id="inputDefault" name="nombre">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="identificacion">Documento de Identificación</label>
                    <input type="text" class="form-control" placeholder="Ingrese la identificacion" id="inputDefault" name="identificacion">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="inputDefault" name="fecha_nac">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="ciudad_nac">Ciudad de Nacimiento</label>
                    <input type="text" class="form-control" placeholder="Ingrese la Ciudad de Nacimiento" id="inputDefault" name="ciudad_nac">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="pais">País de Nacimiento</label>
                    <input type="text" class="form-control" placeholder="Ingrese el País de Nacimiento" id="inputDefault" name="pais">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="edo_civil">Estado Civil</label>
                    <select class="form-control" name="edo_civil">
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="padre">¿Es Padre o Madre?</label>
                    <select class="form-control" name="padre">
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="ocupacion">Ocupación</label>
                    <input type="text" class="form-control" placeholder="Ingrese la ocupación" id="inputDefault" name="ocupacion">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="profesion">Profesión</label>
                    <input type="text" class="form-control" placeholder="Ingrese la Profesión" id="inputDefault" name="profesion">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="residencia">Dirección Residencia</label>
                    <input type="text" class="form-control" placeholder="Ingrese la dirección de su residencia" id="inputDefault" name="residencia">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="barrio">Barrio</label>
                    <input type="text" class="form-control" placeholder="Ingrese la dirección de su barrio" id="inputDefault" name="barrio">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="telefono_1">Teléfono 1</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de telefono" id="inputDefault" name="telefono_1">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="telefono_2">Teléfono 2</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de telefono" id="inputDefault" name="telefono_2">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="celular">Celular</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de celular" id="inputDefault" name="celular">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="direccion_oficina">Dirección de la Oficina</label>
                    <input type="text" class="form-control" placeholder="Ingrese la dirección de su oficina" id="inputDefault" name="direccion_oficina">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="barrio_oficina">Barrio de la Oficina</label>
                    <input type="text" class="form-control" placeholder="Ingrese la dirección del barrio donde está su oficina" id="inputDefault" name="barrio_oficina">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="correo">Correo</label>
                    <input type="email" class="form-control" placeholder="Ingrese su correo" id="inputDefault" name="correo">
                </div>
                <hr class="colored">
                <p>Familiares y amigos recomendados</p>
                <hr class="colored">
                <div class="form-group">
                    <label class="col-form-label" for="f_nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" id="inputDefault" name="f_nombre">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="f_telefono">Teléfono</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de telefono" id="inputDefault" name="f_telefono">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="f_celular">Celular</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de celular" id="inputDefault" name="f_celular">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="f_pago">Método de Pago</label>
                    <select class="form-control" name="f_pago">
                        <option value="A">Anual </option>
                        <option value="S">Semestral</option>
                        <option value="T">Trimestral</option>
                        <option value="M">Mensual</option>
                    </select>
                </div>
                <?php
                    if(!empty($_GET['msj'])) {
                        if ($_GET['msj'] == 5) {
                            echo "<h5 class='text-center'>Datos insertados correctamente</h5>
                                  <br>
                                  <center> <a href='#' class='btn btn-success'>Pagar</a> </center>";
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

<?php
    } 

    else {
        header('Location: index.php?msj=4');
    }

    include_once 'plantillas/footer.php';
?>