<?php

$nombre = $_POST['name'];
$apellidos = $_POST['surname'];
$poblacion = $_POST['town'];

$sql = "INSERT INTO participantes (Apellidos, Nombre, Poblacion) VALUES ('$apellidos', '$nombre', '$poblacion')";

?>