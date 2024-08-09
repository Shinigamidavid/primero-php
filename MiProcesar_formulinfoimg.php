<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    $campo3 = $_POST['campo3'];
    $descripcion = $_POST['descripcion'];

    // Manejar la carga de imágenes
    $imagenPath = '';
    if (isset($_FILES['imagen1']) && $_FILES['imagen1']['error'] == 0) {
        $imagen1 = $_FILES['imagen1'];
        $extension1 = pathinfo($imagen1['name'], PATHINFO_EXTENSION);
        $ruta_destino1 = 'uploads/' . uniqid() . '.' . $extension1;
        move_uploaded_file($imagen1['tmp_name'], $ruta_destino1);
        $imagenPath = $ruta_destino1;
    }

    // Guardar la información en un archivo JSON
    $data = [
        'campo1' => $campo1,
        'campo2' => $campo2,
        'campo3' => $campo3,
        'descripcion' => $descripcion,
        'imagen' => $imagenPath,
    ];
    $dataString = json_encode($data) . PHP_EOL;
    file_put_contents('tarjetas.json', $dataString, FILE_APPEND);

    // Redireccionar al formulario después de enviar
    header('Location: index.html');
    exit;
}
?>
