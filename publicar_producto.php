<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo "Debes iniciar sesión para publicar.";
    exit;
}

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "fotos/$imagen");

file_put_contents("productos.txt", "$nombre|$descripcion|$imagen|{$_SESSION['usuario']}\n", FILE_APPEND);
echo "Producto publicado con éxito. <a href='index.php'>Ver productos</a>";
?>