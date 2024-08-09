<?php
    echo "Bienvenidos al Mundo PHP \n";

    $a= 20;//Integer
    //var_dump($a);
    $b = "Camila";//String
    //var_dump($b);
    $decimal = 4.6; //float
    //var_dump($decimal);
    $bool = true;//Booleano
    //var_dump($bool);
    $matriz = array("Nico", "Juan", "Camila"); //Aray
    //var_dump($matriz);
    //$obj, relacionado con POO
    $vacio = null; //Null
    //var_dump($vacio); 

    echo "$a \n";
    echo "$b \n";
    echo "$decimal \n";
    echo "$bool \n"; // Esto imprimirá 1 porque true se convierte a 1 en string
    echo "$matriz[1] \n"; // Mostrará el segundo elemento del array
    
    //Para recorrer todos los indices del arreglo y mostrarlos
    foreach($matriz as $nva_matriz){
        echo "$nva_matriz \n";
    }
    echo "$vacio \n"; // No imprimirá nada porque null se convierte a string vacío

    echo "Variables en PHP \n";
    ?>
