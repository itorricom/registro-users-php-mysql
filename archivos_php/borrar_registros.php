<?php 
require_once("conexion.php");

$id = $_GET['id'];

$solicitud = "DELETE FROM datos_usuarios WHERE ID=$id";
$resultado = mysqli_query($conexion, $solicitud);
header("location: ../index.php");
?>