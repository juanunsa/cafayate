<?php include 'conexion.php';

$query = mysqli_query($con, "SELECT * FROM usuarios ORDER BY nombre DESC;");
//echo mysqli_num_rows($query);
while($row = mysqli_fetch_array($query)) { 
    $json[]=array('id'=> $row['id'],'nombre'=>$row['nombre'],'clave'=>$row['clave'],'rol'=>$row['rol']); 
}

$json_string = json_encode($json); 
echo $json_string;
?>