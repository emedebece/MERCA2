<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$usuarios = file("usuarios.txt");
$valido = false;

foreach ($usuarios as $u) {
    list($user, $pass) = explode("|", trim($u));
    if ($user === $usuario && $pass === $clave) {
        $valido = true;
        break;
    }
}

if ($valido) {
    $_SESSION['usuario'] = $usuario;
    echo "Bienvenido, $usuario. <a href='publicar.html'>Publicar producto</a>";
} else {
    echo "Usuario o clave incorrectos. <a href='login.html'>Intentar de nuevo</a>";
}
?>