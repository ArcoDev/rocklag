<?php
$correoDestino = "cacosta@awsoftware.mx";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " .$nombre.
"\nApellido: " .$apellido.
"\nEmail: " .$email.
"\nAsunto: " .$asunto.
"\nMensaje: " .$mensaje;

mail($correoDestino, "Han enviado un mensaje de contacto desde tu sitio web.", $contenido);
