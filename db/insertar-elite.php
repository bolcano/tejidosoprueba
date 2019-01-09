<?php

require_once 'conexion.php';

if(!empty($_POST)) {
    if ($_POST['f_pago'] == "A") {
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
        $fecha_nac = isset($_POST['fecha_nac']) ? $_POST['fecha_nac'] : '';
        $ciudad_nac = isset($_POST['ciudad_nac']) ? $_POST['ciudad_nac'] : '';
        $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
        $edo_civil = isset($_POST['edo_civil']) ? $_POST['edo_civil'] : '';
        $padre = isset($_POST['padre']) ? $_POST['padre'] : '';
        $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : '';
        $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : '';
        $residencia = isset($_POST['residencia']) ? $_POST['residencia'] : '';
        $barrio = isset($_POST['barrio']) ? $_POST['barrio'] : '';
        $telefono_1 = isset($_POST['telefono_1']) ? $_POST['telefono_1'] : '';
        $telefono_2 = isset($_POST['telefono_2']) ? $_POST['telefono_2'] : '';
        $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
        $direccion_oficina = isset($_POST['direccion_oficina']) ? $_POST['direccion_oficina'] : '';
        $barrio_oficina = isset($_POST['barrio_oficina']) ? $_POST['barrio_oficina'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        //Familiares y amigos
        $f_nombre = isset($_POST['f_nombre']) ? $_POST['f_nombre'] : '';
        $f_telefono = isset($_POST['f_telefono']) ? $_POST['f_telefono'] : '';
        $f_aporte = "Elite";
        $f_monto = 600000;
        $f_pago = isset($_POST['f_pago']) ? $_POST['f_pago'] : '';
        $agregados = $_POST['agregados'] * 24000;
        $total = $f_monto + $agregados;

        insertar($fecha, $ciudad, $departamento, $nombre, $identificacion, $fecha_nac, $ciudad_nac, $pais, $edo_civil, $padre, $ocupacion, $profesion, $residencia, $barrio, $telefono_1, $telefono_2, $celular, $direccion_oficina, $barrio_oficina, $correo, $f_nombre, $f_telefono, $f_aporte, $f_monto, $f_pago, $agregados, $total);
    }

    if ($_POST['f_pago'] == "S") {
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
        $fecha_nac = isset($_POST['fecha_nac']) ? $_POST['fecha_nac'] : '';
        $ciudad_nac = isset($_POST['ciudad_nac']) ? $_POST['ciudad_nac'] : '';
        $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
        $edo_civil = isset($_POST['edo_civil']) ? $_POST['edo_civil'] : '';
        $padre = isset($_POST['padre']) ? $_POST['padre'] : '';
        $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : '';
        $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : '';
        $residencia = isset($_POST['residencia']) ? $_POST['residencia'] : '';
        $barrio = isset($_POST['barrio']) ? $_POST['barrio'] : '';
        $telefono_1 = isset($_POST['telefono_1']) ? $_POST['telefono_1'] : '';
        $telefono_2 = isset($_POST['telefono_2']) ? $_POST['telefono_2'] : '';
        $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
        $direccion_oficina = isset($_POST['direccion_oficina']) ? $_POST['direccion_oficina'] : '';
        $barrio_oficina = isset($_POST['barrio_oficina']) ? $_POST['barrio_oficina'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        //Familiares y amigos
        $f_nombre = isset($_POST['f_nombre']) ? $_POST['f_nombre'] : '';
        $f_telefono = isset($_POST['f_telefono']) ? $_POST['f_telefono'] : '';
        $f_aporte = "Elite";
        $f_monto = 318000;
        $f_pago = isset($_POST['f_pago']) ? $_POST['f_pago'] : '';
        $agregados = $_POST['agregados'] * 24000;
        $total = $f_monto + $agregados;

        insertar($fecha, $ciudad, $departamento, $nombre, $identificacion, $fecha_nac, $ciudad_nac, $pais, $edo_civil, $padre, $ocupacion, $profesion, $residencia, $barrio, $telefono_1, $telefono_2, $celular, $direccion_oficina, $barrio_oficina, $correo, $f_nombre, $f_telefono, $f_aporte, $f_monto, $f_pago, $agregados, $total);
    }

    if ($_POST['f_pago'] == "T") {
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
        $fecha_nac = isset($_POST['fecha_nac']) ? $_POST['fecha_nac'] : '';
        $ciudad_nac = isset($_POST['ciudad_nac']) ? $_POST['ciudad_nac'] : '';
        $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
        $edo_civil = isset($_POST['edo_civil']) ? $_POST['edo_civil'] : '';
        $padre = isset($_POST['padre']) ? $_POST['padre'] : '';
        $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : '';
        $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : '';
        $residencia = isset($_POST['residencia']) ? $_POST['residencia'] : '';
        $barrio = isset($_POST['barrio']) ? $_POST['barrio'] : '';
        $telefono_1 = isset($_POST['telefono_1']) ? $_POST['telefono_1'] : '';
        $telefono_2 = isset($_POST['telefono_2']) ? $_POST['telefono_2'] : '';
        $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
        $direccion_oficina = isset($_POST['direccion_oficina']) ? $_POST['direccion_oficina'] : '';
        $barrio_oficina = isset($_POST['barrio_oficina']) ? $_POST['barrio_oficina'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        //Familiares y amigos
        $f_nombre = isset($_POST['f_nombre']) ? $_POST['f_nombre'] : '';
        $f_telefono = isset($_POST['f_telefono']) ? $_POST['f_telefono'] : '';
        $f_aporte = "Elite";
        $f_monto = 165000;
        $f_pago = isset($_POST['f_pago']) ? $_POST['f_pago'] : '';
        $agregados = $_POST['agregados'] * 24000;
        $total = $f_monto + $agregados;

        insertar($fecha, $ciudad, $departamento, $nombre, $identificacion, $fecha_nac, $ciudad_nac, $pais, $edo_civil, $padre, $ocupacion, $profesion, $residencia, $barrio, $telefono_1, $telefono_2, $celular, $direccion_oficina, $barrio_oficina, $correo, $f_nombre, $f_telefono, $f_aporte, $f_monto, $f_pago, $agregados, $total);
    }

    if ($_POST['f_pago'] == "M") {
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
        $fecha_nac = isset($_POST['fecha_nac']) ? $_POST['fecha_nac'] : '';
        $ciudad_nac = isset($_POST['ciudad_nac']) ? $_POST['ciudad_nac'] : '';
        $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
        $edo_civil = isset($_POST['edo_civil']) ? $_POST['edo_civil'] : '';
        $padre = isset($_POST['padre']) ? $_POST['padre'] : '';
        $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : '';
        $profesion = isset($_POST['profesion']) ? $_POST['profesion'] : '';
        $residencia = isset($_POST['residencia']) ? $_POST['residencia'] : '';
        $barrio = isset($_POST['barrio']) ? $_POST['barrio'] : '';
        $telefono_1 = isset($_POST['telefono_1']) ? $_POST['telefono_1'] : '';
        $telefono_2 = isset($_POST['telefono_2']) ? $_POST['telefono_2'] : '';
        $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
        $direccion_oficina = isset($_POST['direccion_oficina']) ? $_POST['direccion_oficina'] : '';
        $barrio_oficina = isset($_POST['barrio_oficina']) ? $_POST['barrio_oficina'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        //Familiares y amigos
        $f_nombre = isset($_POST['f_nombre']) ? $_POST['f_nombre'] : '';
        $f_telefono = isset($_POST['f_telefono']) ? $_POST['f_telefono'] : '';
        $f_aporte = "Elite";
        $f_monto = 58000;
        $f_pago = isset($_POST['f_pago']) ? $_POST['f_pago'] : '';
        $agregados = $_POST['agregados'] * 24000;
        $total = $f_monto + $agregados;

        insertar($fecha, $ciudad, $departamento, $nombre, $identificacion, $fecha_nac, $ciudad_nac, $pais, $edo_civil, $padre, $ocupacion, $profesion, $residencia, $barrio, $telefono_1, $telefono_2, $celular, $direccion_oficina, $barrio_oficina, $correo, $f_nombre, $f_telefono, $f_aporte, $f_monto, $f_pago, $agregados, $total);
    }
}

else {
    header('Location: plan-elite.php?msj=6');
}

function insertar($fecha, $ciudad, $departamento, $nombre, $identificacion, $fecha_nac, $ciudad_nac, $pais, $edo_civil, $padre, $ocupacion, $profesion, $residencia, $barrio, $telefono_1, $telefono_2, $celular, $direccion_oficina, $barrio_oficina, $correo, $f_nombre, $f_telefono, $f_aporte, $f_monto, $f_pago, $agregados, $total) {
    $sql = "INSERT INTO elite (idDonante, fecha, ciudad, departamento, nombre, identificacion, fecha_nac, ciudad_nac, pais, edo_civil, padre, ocupacion, profesion, residencia, barrio, telefono_1, telefono_2, celular, direccion_oficina, barrio_oficina, correo, f_nombre, f_telefono, f_aporte, f_monto, f_pago, agregados, total) 
        VALUES
    (NULL, '{$fecha}', '{$ciudad}', '{$departamento}', '{$nombre}', '{$identificacion}', '{$fecha_nac}', '{$ciudad_nac}', '{$pais}', '{$edo_civil}', '{$padre}', '{$ocupacion}', '{$profesion}', '{$residencia}', '{$barrio}', '{$telefono_1}', '{$telefono_2}', '{$celular}', '{$direccion_oficina}', '{$barrio_oficina}', '{$correo}', '{$f_nombre}', '{$f_telefono}', '{$f_aporte}', '{$f_monto}', '{$f_pago}', '{$agregados}', '{$total}'
    )";

    mysqli_query(conexion(), $sql);
    header('Location: ../plan-elite.php?msj=5');
}