<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>MERCA2</title></head>
<body>
<h1>Productos en MERCA2</h1>
<?php
$productos = file("productos.txt");
foreach ($productos as $p) {
    list($nombre, $descripcion, $imagen, $usuario) = explode("|", trim($p));
    echo "<div style='border:1px solid #ccc; margin:10px; padding:10px'>";
    echo "<h3>$nombre</h3>";
    echo "<p>$descripcion</p>";
    echo "<p><strong>Vendedor:</strong> $usuario</p>";
    echo "<img src='fotos/$imagen' width='150'><br>";
    echo "<a href='https://wa.me/123456789'>Contactar por WhatsApp</a>";
    echo "</div>";
}
?>
</body>
</html>