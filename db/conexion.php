<?php

function conexion() {
    try {
        $db = mysqli_connect('67.23.253.115', 'tejidoso', 'Uz=mmgp%QbJ.', 'TSC_DB', '3306');
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

    return $db;
}

conexion();