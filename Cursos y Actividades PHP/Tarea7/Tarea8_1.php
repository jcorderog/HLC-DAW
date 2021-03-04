<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos

    //Al ser una varaible integer y obligarle a que lo sea, no cambia nada.
    echo ((real)$a1),"<br>";

    //Al ser una variable integer y obligarle a  que sea double, no cambia nada.
    echo ((double)$a2),"<br>";

    //Al ser una variable float y obligarle a que lo sea, no cambia nada.
    echo ((float)$a3),"<br>";

    /*
        Al ser uan variable de tipo double y obligarla a ser integer, solo muestra
        la parte entera.
    */
    echo ((integer)$a4),"<br>";

    /*
        Al ser una variable de tipo cadena y su contenido son números, al obligarle que sea
        integer, pasa los números que contiene la cadena a integer y liego imprime los números.
    */
    echo ((int)$a6),"<br>";

    /*
        Al ser una variable de tipo cadena y no contener ningun número, te imprime un 0.
    */
    echo ((int)$a8),"<br>";

    /*
        Al ser una variable de tipo cadena y contener un número, al oblugarlo a ser tipo double,
        solo imprime l parte numérica.
    */
    echo ((double)$a9),"<br>";

    /*
        Al ser una variable de tipo cadena y no contener nada, al obligarle ser entera, imprime un 0.
    */
    echo ((int)$a10),"<br>";
 
?>