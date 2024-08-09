<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar hasta el 10 </title>
</head>
<body>
<form method="post">
    <label for="num">Ingrese un numero:</label><br>
    <input type="number" id="num" name="num">
    <input type="submit" value="Multiplicar">

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST ['num'];
    echo "<ul>";

    for ($i=1; $i<=10 ; $i++) {
        echo "<li>$num x $i =" . ($num * $i). "</li>";
    }
        echo "</ul>";

    }

?>


</body>
</html>
