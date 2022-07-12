<?php
include 'conexion.php';
$query = mysqli_query($con, "SELECT nombre,ST_X (coordenadas) as latitud,ST_Y(coordenadas) as
 longitud,ST_Distance_Sphere(coordenadas,Point(-26.065144,-65.972699)) /1000 as terminal FROM lugar ORDER BY nombre ASC;");
//echo mysqli_num_rows($query);
while($row = mysqli_fetch_array($query)) { 
    $json[]=array('nombre'=> $row['nombre'],'latitud'=>$row['latitud'],'longitud'=>$row['longitud'],'terminal'=>round($row['terminal'],1),'geologia'=>$row['geologia'],'patrimonio'=>$row['patrimonio'],'artesanias'=>$row['artesanias']) ; 
}

$json_string = json_encode($json); 
echo $json_string;

?>
