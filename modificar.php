<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    include_once ("conexion1.php");
    $id = $_POST["idCliente"];
    $nombre = $_POST["nom"];
    $direc = $_POST["dir"];
    $tel = $_POST["tel"];

    if($conexion){
        $sql = "update Clientes set nombre ='nombre', direccion = '$direc', telefono = '$tel' where idCliente = ''$id";
        $resultado = mysqli_query($conexion,$sql);
        echo "Resgistro Modificado Satisafactoriamente"; 
    }
    else{
        echo "Error al Modificar";
    }
    $conexion->close();
?>
<br>
<a href="consulta_cliente.php" class="btn btn-primary">Regresar</a>

</body>
</html>