<?php

require_once 'db/conexion.php';

if(!empty($_POST)) {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    login($usuario, $password);
    header('Location: inicio.php');
}

function login($usuario, $password) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND password = '{$password}'";
    $resultado = mysqli_query(conexion(), $sql);

    if (mysqli_num_rows($resultado)) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: inicio.php');
    }
    
    else {
        header('Location: index.php?msj==3');
    }
}