<?php

    $langosta = 60;
    $angula = 80;
    $caviar = 490;

    if (($langosta > 50 && $angula > 70) || ($langosta > 50 && $caviar > 500) || ($angula > 70 && $caviar > 500) ) {
        print "cierto al menos dos superan los precios<br>";
    } else {
        print "falso al menos dos no superan los precios<br>";
    }
?>