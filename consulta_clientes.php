<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta clientes</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/812f294f45.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

</head>
<body>
<?php
  include_once ("conexion1.php");
  $where ="";

  //Se Verifica si se carga o no la informacion
  if(!empty($_POST)){//si el formulario se envia vacio
    $valor = $_POST['nom'];
    if(!empty($valor)){
      $where = "Where nombre like '%$valor%'";
    }
    
  }
  // al agregar la variable $where a la consulta
  //Filtrara si se envia datos desde el formulario de busqueda
  $sql = "select * from clientes $where";
  $resultado = $conexion->query($sql);
  //$resultado = mysqli_query($conexion, $sql);

  //validar para mostrar los datos 
?>

    <h1>Lista de Clientes</h1>
    <div class="row" style="float: left;"></div>
    <!-- Enviar el resultado de la busqueda sobre el mismo Scrip "Cosnultar_Cliente" con
      $_SERVER['PHP_SELF']; empieza a recorrer el script desde el inicio -->

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <div class="mb-3 mt-3 p-1">
        <label for="nom" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nom" name="nom">
      </div>
      <div class="mb-2 mt-2 p-1">
        <input type="submit" class="from-control btn btn-info" id="enviar" name="enviar" value="Buscar">
      </div>
    </form>

    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Identificación</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Accion</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      //muestra la informacion
      if ($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){//fetch_assoc trae todo lo relacionado      
      ?>
            
      <tr>
        <td><?php echo $row["idCliente"]?></td>
        <td><?php echo $row["nombre"]?></td>
        <td><?php echo $row["direccion"]?></td>
        <td><?php echo $row["telefono"]?></td>
        <!-- El idCliente como variable se envia con el metdodo GET, es decir por URL -->
        <td>
          <a href="modificar_cliente.php?idCliente=<?php echo $row["idCliente"];?>">
          <i class="fa-solid fa-wheelchair-move"style="font-size: 36px; "></i></a>
          <a href="#"data-href="eliminar_cliente.php?idCliente=<?php echo $row["idCliente"];?>"
            data-bs-toggle="modal" data-bs-target="#confirmar-delete" >
          <i class="fas fa-trash-alt" style="font-size: 36px; color:red"></i></a>

        </td>
      
      <?php 
        }

      }
      else {
        echo "No existe informacion en la BD";
      }
      ?>

    </tbody>
  </table>
  <?php
    $conexion->close();
  ?>
<?php include('modal.php') ?>

</body>
</html>