<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros del 1 al 10</title>
</head>
<body>
    <form method="post">
        <h2>Numeros del 1 al 10 </h2><br><br>
        <input type="submit" value="Mostar numeros">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<ul>";
    for ($i = 1; $i <= 10; $i++) { 
         echo "<li>$i</li>";
        }
       echo "</ul>";
        
    }
?>

</body>
</html>

