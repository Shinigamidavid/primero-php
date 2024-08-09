   <?php
    echo "Alcance de variables";
    echo "<br>";
    $nom = "Camila"; //variable global
    function local(){
        $x = "10";
        echo ("Esta es la variable local: $x");
        echo "<br>";
        // echo ("variable global: $nom"); 

    }
    local();
    //echo "esta es variable local (no se muestra): $x";
    echo "Esta es variable global: $ nom";
    echo"<br>";

    function globall(){
        global $nom; //uso de la variable globla 
        echo "Aqui se muestra la variable global: $nom";
        echo "<br>";
    }
    globall();

    function estatica(){
        static $a =1;
        echo "este es el valor de la variable estatica: $a";
        echo "<br>";
        $a++;
    }

    estatica();
    estatica();
    ?>
