<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = $_POST['clave'];
    file_put_contents("usuarios.txt", "$user|$pass\n", FILE_APPEND);
    echo "Registrado correctamente. <a href='login.html'>Iniciar sesión</a>";
}
?>