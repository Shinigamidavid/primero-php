<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de numero ingresar</title>
</head>
<body>
<h2>Ingresa un número</h2>
    <form method="post">
        Número: <input type="number" name="numero"><br><br>
        <input type="submit" value="Calcular Factorial">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            $factorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }
            echo "<p>El factorial de $numero es $factorial.</p>";
        }
    ?>
</body>
</html>