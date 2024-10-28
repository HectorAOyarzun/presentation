<?php

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Codificación UTF-8
header('Content-Type: text/plain; charset=utf-8');

// Validación
if (empty($nombre)) {
  echo "El campo 'nombre' es obligatorio.";
  exit();
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  echo "El campo 'correo electrónico' no es válido.";
  exit();
}

if (empty($asunto)) {
  $asunto = "Mensaje de contacto";
}

// Enviar el correo electrónico
mail("hectorcevalogistic@gmail.com", $asunto, $mensaje, "From: $nombre <$mail>");

// Mostrar un mensaje de confirmación
echo "El mensaje se envió correctamente.";

?>
