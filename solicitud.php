<?php
include_once 'plantillas/header2.php';
require_once 'db/conexion.php'; ?>

<header class="video">
    <div class="overlay"></div>
    <div class="intro-content">
        <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
        <div class="brand-name">Tejido social colombiano</div>
        <hr class="colored">
        <div class="brand-name-subtext">Solicitudes</div>
    </div>
    <div class="scroll-down page-scroll">
        <a class="btn page-scroll" href="#solicitudes"><i class="fa fa-angle-down"></i></a>
    </div>
</header>
<section id="solicitudes">
    <?php
            if (!empty($_POST)) {
                if ($_POST['plan'] == "B") {
                    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
                    solicitudB($correo);
                } 

                else if ($_POST['plan'] == "P") {
                    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
                    solicitudP($correo);
                } 

                else if ($_POST['plan'] == "E") {
                    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
                    solicitudE($correo);
                }
            }

            function solicitudB($correo) {
                $sql = "SELECT * FROM basico WHERE correo='{$correo}'";
                $resultado = mysqli_query(conexion(), $sql);

                if(mysqli_num_rows($resultado)) {
                    echo "<div class='container'>
                            <br><br>
                            <table id='table' class='table table-hover'>";
                                echo "<tr>
                                        <th>ID</th>
                                        <th>FECHA</th>
                                        <th>NOMBRE</th>
                                        <th>PAÍS</th>
                                        <th>RESIDENCIA</th>
                                        <th>MONTO A PAGAR</th>
                                        <th>Acción</th>
                                    </tr>";
                    while ($registros = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>$registros[idDonante]</td>
                                <td>$registros[fecha]</td>
                                <td>$registros[nombre]</td>
                                <td>$registros[pais]</td>
                                <td>$registros[residencia]</td>
                                <td>$registros[f_monto] $</td>
                                <td>
                                    <a href='plantillas/pagar.php?idDonante=$registros[idDonante]' class='btn btn-success'>Pagar</a>
                                </td>   
                            </tr>
                        </div>"; 
                    }
                    echo "</table>";
                }
            }

            function solicitudP($correo) {
                $sql = "SELECT * FROM premier WHERE correo='{$correo}'";
                $resultado = mysqli_query(conexion(), $sql);

                if(mysqli_num_rows($resultado)) {
                    echo "<div class='container'>
                            <br><br>
                            <table id='table' class='table table-hover'>";
                                echo "<tr>
                                        <th>ID</th>
                                        <th>FECHA</th>
                                        <th>NOMBRE</th>
                                        <th>PAÍS</th>
                                        <th>RESIDENCIA</th>
                                        <th>MONTO A PAGAR</th>
                                        <th>Acción</th>
                                    </tr>";
                    while ($registros = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>$registros[idDonante]</td>
                                <td>$registros[fecha]</td>
                                <td>$registros[nombre]</td>
                                <td>$registros[pais]</td>
                                <td>$registros[residencia]</td>
                                <td>$registros[f_monto] $</td>
                                <td>
                                    <a href='plantillas/pagar.php?idDonante=$registros[idDonante]' class='btn btn-success'>Pagar</a>
                                </td>   
                            </tr>
                        </div>"; 
                    }
                    echo "</table>";
                }
            }

            function solicitudE($correo) {
                $sql = "SELECT * FROM elite WHERE correo='{$correo}'";
                $resultado = mysqli_query(conexion(), $sql);

                if(mysqli_num_rows($resultado)) {
                    echo "<div class='container'>
                            <br><br>
                            <table id='table' class='table table-hover'>";
                                echo "<tr>
                                        <th>ID</th>
                                        <th>FECHA</th>
                                        <th>NOMBRE</th>
                                        <th>PAÍS</th>
                                        <th>RESIDENCIA</th>
                                        <th>Nº DE AGREGADOS</th>
                                        <th>MONTO A PAGAR</th>
                                        <th>Acción</th>
                                    </tr>";
                    while ($registros = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>
                                <td>$registros[idDonante]</td>
                                <td>$registros[fecha]</td>
                                <td>$registros[nombre]</td>
                                <td>$registros[pais]</td>
                                <td>$registros[residencia]</td>
                                <td>$registros[agregados]</td>
                                <td>$registros[f_monto] $</td>
                                <td>
                                    <a href='plantillas/pagar.php?idDonante=$registros[idDonante]' class='btn btn-success'>Pagar</a>
                                </td>   
                            </tr>
                        </div>"; 
                    }
                    echo "</table>";
                }
            }
    ?>
</section>

<?php
    include_once 'plantillas/footer.php';