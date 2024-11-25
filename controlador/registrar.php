<?php
include 'conexion.php';

$num  = $_POST['num'];

$sql = "INSERT INTO asistentes (num_empleado) VALUES ('".$num."')";
$result = $conn->query($sql);

header("HTTP/1.1 302 Moved Temporarily");
header("Location: ../araiza/index.php");