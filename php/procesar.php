<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Redirigir al usuario a otra página para mostrar la información capturada
    header("Location: mostrar_info.php?nombre=$nombre&email=$email&mensaje=$mensaje");
    exit;
} else {
    // Si alguien intenta acceder directamente a este script, redirigirlo a la página del formulario
    header("Location: formulario.html");
    exit;
}
?>
