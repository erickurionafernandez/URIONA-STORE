<?php
$nombre = $_POST["nombre"];
 $correo = $_POST["correo"];
$mascota = $_POST["mascota"];

 echo "<h2>Turno reservado en Veterinaria Patitas</h2>";

echo "<p><strong>Nombre:</strong> $nombre</p>";
 echo "<p><strong>Correo:</strong> $correo</p>";
echo "<p><strong>Mascota:</strong> $mascota</p>";

echo "<h3>Servicios disponibles:</h3>";
 $servicios = [
  "Consulta general - Bs 60",
   "Vacuna antirrabica - Bs 40",
  "Bano y corte - Bs 50"
];

 echo "<ul>";
foreach ($servicios as $servicio) {
  echo "<li>$servicio</li>";
}
 echo "</ul>";

  echo "<p>Te atiende Erick Weimar Uriona Fernandez</p>";
?>
