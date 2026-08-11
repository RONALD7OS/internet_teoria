<?php
$nombre = $_POST["nombre-cliente"];
$correo = $_POST["correo-cliente"];
$mensaje = $_POST["mensaje-cliente"];

echo "<h2>Mensaje recibido, caserito</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Mensaje: $mensaje</p>";