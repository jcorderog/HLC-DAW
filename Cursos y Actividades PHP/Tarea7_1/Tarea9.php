<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &; Los bits que están activos en ambos son activados.
    print_r($a&$b);
    echo "<br>";
    print_r($A&$B);
    echo "<br>";
    //operador |; Los bits que están activos ya sea en uno u otro son activados.
    print_r($a|$b);
    echo "<br>";
    print_r($A|$B);
    echo "<br>";
    //operador ^; Los bits que están activos en uno de ellos, pero no en ambos, son activados. 
    print_r($a^$b);
    print_r($A^$B);
    echo "<br>";
    //repite el código para el operador <<; Desplaza los bits de $a, $b pasos a la izquierda (cada paso quiere decir "multiplicar por dos").
    print_r($a << $b);
    print_r($A << $B);
    echo "<br>";
    //repite el código para el operador >>; Desplaza los bits de $a, $b pasos a la derecha (cada paso quiere decir "dividir por dos"). 
    print_r($a >> $b);
    print_r($A >> $B);
    echo "<br>";
    //operador ~ Los bits que están activos en el son desactivados, y viceversa. 
    print_r(~$a);

?>