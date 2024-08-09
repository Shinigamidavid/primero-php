<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de numeros (el numero mayor y menor)</title>
</head>
<body>
<h2>Ingresa una lista de números separados por comas</h2>
    <form method="post">
        Lista: <input type="text" name="listaNumeros"><br><br>
        <input type="submit" value="Encontrar Mayor y Menor">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $lista = array_map('intval', explode(',', $_POST['listaNumeros']));
            $mayor = max($lista);
            $menor = min($lista);
            echo "<p>El número más grande es $mayor y el más pequeño es $menor.</p>";
        }
    ?>
</body>
</html>