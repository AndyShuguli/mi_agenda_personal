<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $ciudad = $_POST["ciudad"];
    $id_categoria = $_POST["id_categoria"];
    $favorito = $_POST["favorito"];

    $id_usuario = $_SESSION["id_usuario"];

    $sql = "INSERT INTO contactos_personales
    (id_usuario,nombre,telefono,correo,ciudad,id_categoria,favorito)
    VALUES
    ('$id_usuario','$nombre','$telefono','$correo','$ciudad','$id_categoria','$favorito')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Contacto</title>
</head>
<body>

<h2>Nuevo Contacto</h2>

<form method="POST">

Nombre:
<input type="text" name="nombre" required>
<br><br>

Teléfono:
<input type="text" name="telefono" required>
<br><br>

Correo:
<input type="email" name="correo" required>
<br><br>

Ciudad:
<input type="text" name="ciudad" required>
<br><br>

Categoría:
<select name="id_categoria" required>
    <option value="1">Familia</option>
    <option value="2">Amigos</option>
    <option value="3">Trabajo</option>
    <option value="4">Universidad</option>
    <option value="5">Otro</option>
</select>

<br><br>

Favorito:
<select name="favorito" required>
    <option value="SI">SI</option>
    <option value="NO">NO</option>
</select>

<br><br>

<input type="submit" value="Guardar">

</form>

</body>
</html>