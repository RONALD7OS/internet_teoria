<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["consulta"];

echo "<h2>Cita reservada en Óptica Mirasol</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Mensaje: $mensaje</p>";

foreach ($servicios as $servicio) {
    echo "<p>Servicio: $servicio</p>";
}
$servicios = [
    "Examen de vista - Bs 50",
    "Armazón clásico - Bs 180",
    "Lentes de sol - Bs 120"
];