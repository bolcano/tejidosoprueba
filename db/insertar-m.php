<?php

require_once 'conexion.php';

if(!empty($_POST)) {
    $especialidad = isset($_POST['especialidad']) ? $_POST['especialidad'] : '';
    $medico = isset($_POST['medico']) ? $_POST['medico'] : '';
    $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';

    insertar($especialidad, $medico, $ubicacion);
}

else {
    header('Location: ../inicio.php?msj=6');
}

function insertar($especialidad, $medico, $ubicacion) {
    $sql = "INSERT INTO especialidades(idEspecialidad, especialidad, medico, ubicacion)
        VALUES
    (NULL, '{$especialidad}', '{$medico}', '{$ubicacion}'
    )";
    
    mysqli_query(conexion(), $sql);
    header('Location: ../inicio.php?msj=5');
}