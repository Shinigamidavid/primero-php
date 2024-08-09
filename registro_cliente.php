<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php
    include_once ("conexion1.php");

    if(isset($_POST["idCliente"]) && isset($_POST["nom"]) && isset($_POST["dir"]) && isset($_POST["tel"])) {

    $id = $_POST["idCliente"];
    $nombre = $_POST["nom"];
    $direc = $_POST["dir"];
    $tel = $_POST["tel"];

    if($conexion){
        $sql = "INSERT INTO clientes (idcliente, nombre, direccion, telefono)
                values ('$id','$nombre','$direc','$tel' )";
        $resultado = $conexion->query($sql);
        
        if($resultado) {
            echo "Registro Satisfactorio";
        } else {
            echo "Error en el registro: " . $conexion->error;
        }
        
    } else {
        echo "Error en la conexion: " . $conexion->error;
    }

    $conexion->close();
    } else {
        echo "Datos incompletos.";
    }
    
    ?>
    
</body>
</html>