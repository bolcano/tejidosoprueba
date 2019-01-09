<?php

require_once 'conexion.php';

if(!empty($_POST)) {
    if($_POST['clave'] == "1412" || $_POST['clave'] == 1412) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
        $f_nac = isset($_POST['f_nac']) ? $_POST['f_nac'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
        
        insertar($idUsuario, $nombre, $apellido, $f_nac, $correo, $usuario, $password, $ubicacion);
    }

    else if (empty($_POST['clave'])) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
        $f_nac = isset($_POST['f_nac']) ? $_POST['f_nac'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
        
        insertarC($idUsuario, $nombre, $apellido, $f_nac, $correo, $usuario, $password, $ubicacion);
    }

    else {
        header('Location: ../registrarse.php?msj=2');
    }
    
}

else {
    header('Location: ../registrarse.php?msj=2');
}

function insertar($idUsuario, $nombre, $apellido, $f_nac, $correo, $usuario, $password, $ubicacion) {
    $sql = "INSERT INTO usuarios(idUsuario, nombre, apellido, f_nac, correo, usuario, password, ubicacion) VALUES (
        NULL, '{$nombre}', '{$apellido}', '{$f_nac}', '{$correo}', '{$usuario}', '{$password}', '{$ubicacion}'
    )";

    mysqli_query(conexion(), $sql);
    header('Location: ../registrarse.php?msj=1');
}

function insertarC($idUsuario, $nombre, $apellido, $f_nac, $correo, $usuario, $password, $ubicacion) {
    $sql = "INSERT INTO usuariosc(idUsuario, nombre, apellido, f_nac, correo, usuario, password, ubicacion) VALUES (
        NULL, '{$nombre}', '{$apellido}', '{$f_nac}', '{$correo}', '{$usuario}', '{$password}', '{$ubicacion}'
    )";

    mysqli_query(conexion(), $sql);
    header('Location: ../registrarse.php?msj=1');
}