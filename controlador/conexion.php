<?php

// Datos para conexión
$servername = "192.9.203.55";
$username   = "araizasi_supp";
$password   = "MXL1702";

// COMUNICADOS
$conn = new mysqli($servername, $username, $password, "comunica_portalcomunicacion");
mysqli_set_charset($conn,"utf8"); //para visualizar acentos
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


