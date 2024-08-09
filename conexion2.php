<?php
$connection_obj  =  mysqli_connect ("localhost","root","","crud_img");


if (!$connection_obj) {
    die("Connection failed: " . mysqli_connect_error());
}


if($conexion->connect_error){
    die("fallo en la conexion" . $conexion ->connect_error);
}
else{
    echo "conexion exitosa";

}

?>
