<?php
    
    $var = "hola";

    echo $var . "<br>";

    $var = "adios";

    echo $var . "<br>";


    function variableDistin() {
        $var = "var función";
        echo $var . "<br>";
    }

    variableDistin();

    echo "La variable de la función no cambio los valores de la variable var: " . $var . "\n";

?>