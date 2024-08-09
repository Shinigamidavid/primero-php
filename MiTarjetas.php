<?php
$cardsHtml = '';
if (file_exists('tarjetas.json')) {
    $lines = file('tarjetas.json');
    foreach ($lines as $line) {
        $data = json_decode($line, true);
        if ($data) {
            $cardsHtml .= '
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="' . htmlspecialchars($data['imagen']) . '" class="card-img-top" alt="Imagen">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($data['campo1']) . '</h5>
                        <p class="card-text"><strong>Campo 2:</strong> ' . htmlspecialchars($data['campo2']) . '</p>
                        <p class="card-text"><strong>Campo 3:</strong> ' . htmlspecialchars($data['campo3']) . '</p>
                        <p class="card-text"><strong>Descripción:</strong> ' . htmlspecialchars($data['descripcion']) . '</p>
                    </div>
                </div>
            </div>';
        }
    }
}

echo $cardsHtml;
?>
