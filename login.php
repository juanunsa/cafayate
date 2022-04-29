<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$consultar=mysqli_query($con,"select * from usuario where nombre='$usuario' and clave='$clave'");
$resultado=array();
while($extraer=$consultar->fetch_assoc()){
    $resultado[]=$extraer;}
echo json_encode($resultado);
?>