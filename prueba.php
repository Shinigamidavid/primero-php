<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Hola,[nombre]! tienes[edad]añor.</title>
</head>
<body>

    <form method="post">
    <h2>Ingrese nombre y edad</h2>
    
    <label>Nombre:</label><br>
     <input type="text" name= "nom" >
    <br>
    <label>Edad:</label><br>
     <input type="number" name= "edad" >
    <br>
    <input type="submit" value="Enviar"><br>
    </form>
    
    <?php
    if($_SERVER ["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST ["nom"];
        $edad = $_POST ["edad"];
        echo ("¡Hola $nombre! Tienes $edad años");

    }
   ?>

</body>
</html>


