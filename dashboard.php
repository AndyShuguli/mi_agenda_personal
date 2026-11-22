<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

$id_usuario = $_SESSION["id_usuario"];

$busqueda = "";
$orden = "nombre";

if (isset($_GET["buscar"])) {
    $busqueda = $_GET["buscar"];
}

if (isset($_GET["orden"])) {

    if ($_GET["orden"] == "ciudad") {
        $orden = "ciudad";
    } else {
        $orden = "nombre";
    }
}

if (isset($_GET["favoritos"])) {

    $sql = "SELECT contactos_personales.*, categorias.nombre AS categoria
    FROM contactos_personales
    INNER JOIN categorias
    ON contactos_personales.id_categoria = categorias.id
    WHERE contactos_personales.id_usuario='$id_usuario'
    AND contactos_personales.favorito='SI'
    AND (
        contactos_personales.nombre LIKE '%$busqueda%'
        OR contactos_personales.correo LIKE '%$busqueda%'
        OR contactos_personales.ciudad LIKE '%$busqueda%'
    )
    ORDER BY contactos_personales.$orden";

} else {

    $sql = "SELECT contactos_personales.*, categorias.nombre AS categoria
    FROM contactos_personales
    INNER JOIN categorias
    ON contactos_personales.id_categoria = categorias.id
    WHERE contactos_personales.id_usuario='$id_usuario'
    AND (
        contactos_personales.nombre LIKE '%$busqueda%'
        OR contactos_personales.correo LIKE '%$busqueda%'
        OR contactos_personales.ciudad LIKE '%$busqueda%'
    )
    ORDER BY contactos_personales.$orden";
}

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Principal</title>
</head>
<body>

<h2>Bienvenido <?php echo $_SESSION["nombre"]; ?></h2>

<a href="crear_contacto.php">Nuevo contacto</a>

<br><br>

<a href="dashboard.php">Mostrar todos</a>
|
<a href="dashboard.php?favoritos=SI">Mostrar favoritos</a>

<br><br>

<form method="GET">

Buscar contacto:
<input type="text" name="buscar">

<input type="submit" value="Buscar">

</form>

<br>

<form method="GET">

Ordenar por:

<select name="orden">
    <option value="nombre">Nombre</option>
    <option value="ciudad">Ciudad</option>
</select>

<input type="submit" value="Ordenar">

</form>

<br>

<a href="logout.php">Cerrar sesión</a>

<br><br>

<table border="1">

<tr>
    <th>Nombre</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>Ciudad</th>
    <th>Categoría</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>

<tr>

<td><?php echo $fila["nombre"]; ?></td>
<td><?php echo $fila["telefono"]; ?></td>
<td><?php echo $fila["correo"]; ?></td>
<td><?php echo $fila["ciudad"]; ?></td>
<td><?php echo $fila["categoria"]; ?></td>

<td>

<a href="editar_contacto.php?id=<?php echo $fila['id']; ?>">
Editar
</a>

<a href="eliminar_contacto.php?id=<?php echo $fila['id']; ?>"
onclick="return confirm('¿Está seguro de eliminar este contacto?');">
Eliminar
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>