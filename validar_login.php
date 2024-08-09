<?php
    session_start();
    include_once("conexion1.php");
    if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){

        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    $usuario = validar($_POST["usuario"]);
    $contrasena = validar($_POST["contrasena"]);

    // crear validacion para cada uno de los datos ingresados

    if(empty($usuario)){
        header("location: login.php?error=Usuario Requerido");
        exit();
    }elseif(empty($contrasena)){
        header("location: login.php?error=Contraseña Requerida");
        exit();
    }
    else{
        $sql = "select cliente, nombre, contrasena, rol from clientes, login 
        where idCliente = cliente and cliente = '$usuario' and contrasena = '$contrasena'";
        $resultado = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resultado) === 1){
            $row = mysqli_fetch_assoc($resultado);
            if($row['cliente'] === $usuario && $row['contrasena'] === $contrasena){
                $_SESSION['usuario'] = $row ['cliente'];
                $_SESSION['nombre'] = $row ['nombre'];
                $_SESSION['rol'] = $row ['rol'];
                if($row['rol'] == 'cliente'){
                    header('location: InterfazCliente.php');
                }elseif($row['rol'] == 'admin'){
                    header('location: InterfazAdmin.php');
                }
            }
            else{
                header("location: login.php?error = Usuario o contraseña incorrecta");
            exit();        
            }
         }
        else{
            header("location: login.php?error = Usuario o contraseña incorrecta");
            exit();
        }
    }
} else{
    header("location: login.php?error = Usuario o contraseña incorrecta");
    exit();
}



?>