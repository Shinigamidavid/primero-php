<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<form action="validar_login.php" method="post" class="mt-3" id="r_clientes" >
    <h1 class="text-center">Inicio de sesion</h1>
    <hr>
     <?php
        if (isset($_GET['error'])) {
        ?>
            <p class="p-2 text-danger"><?php echo $_GET['error'] ?></p>
        <?php
        }

        ?>
        <div class="mb-3 mt-3 p-1">
            <label for="usu" class="form-label">Ingresa tu Nombre de usuario </label>          
            <input type="text" class="form-control" id="usu" placeholder="Nombre de Usuario" name="usuario">
        </div>

        <div class="mb-3">
            <label for="cont" class="form-label">Contraseña</label>  
            <input type="password" class="form-control" id="cont" placeholder="Password" name="contrasena">          
        </div>

        <div class="d-grid gap-3">
            <button type="submit" class="btn btn-primary btn-block">Inciar Sesión</button>   
        </div>
        <div class="d-grid gap-3">
            <a href="registro_cliente.html" >Crear Cuenta</a>
          </div>
        </div>
          
      </form>
</body>
</html>