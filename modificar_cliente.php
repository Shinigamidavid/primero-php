<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre del software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div> 
  
<?php
    include_once ("conexion1.php");

    $id = $_GET["idCliente"];
    $sql =  "select * from clientes where idCliente = '$id'";
    $result = $conexion->query($sql);
    //Se trae el resultado
    $row = $result->fetch_array(MYSQLI_ASSOC);
?>


    <form  action="modificar.php" method="post" class="mt-3" id="r_clientes">
        <h2 class="text-center">Modificar Clientes</h2>
        <div class="mb-3 mt-3 p-1">
            <label for="nom" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nom" placeholder="Nombre Completo" value="<?php echo $row["nombre"];?>"name="nom">
        </div>
        <!-- <div class="mb-3 mt-3">
        <label for="idCliente" class="form-label" >Identificacion:</label>
        <input type="number" class="form-control" id="idCliente" name="idCliente" placeholder="Identificacion sin puntos"value="<?php echo $row[""];?>">
        </div> -->
        <div class="mb-3 mt-3">
        <label for="dir" class="form-label" >Direccion:</label>
        <input type="text" class="form-control" id="dir" name="dir" placeholder="Ingrese direccion"value="<?php echo $row["direccion"];?>">
        </div>
        <div class="mb-3 mt-3">
        <label for="tel" class="form-label" >Telefono:</label>
        <input type="number" class="form-control" id="tel" name="tel" placeholder="(057)0000000"value="<?php echo $row["telefono"];?>">
        </div>
        
        

        <input type="hidden" id="ident" name="idCliente" value="<?php echo$row["idCliente"];?>">    
            
        <div class="d-grid gap-3">
            <button type="submit" class="btn btn-primary btn-block">Modificar</button>
        </div>
    </form> 
</div>      


</body>
</html>