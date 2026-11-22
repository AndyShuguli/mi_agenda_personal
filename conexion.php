<?php

$servidor = "sql101.infinityfree.com";
$usuario = "if0_43501512";
$password = "MiAgenda987";
$basedatos = "if0_43501512_mi_agenda_personal";

$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conexion) {
    die("Error: " . mysqli_connect_error());
}

?>