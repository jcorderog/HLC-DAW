<?php

include("ejemplo8.1.php");

include_once("ejemplo8.2.php");

require_once("ejemplo8.3.php");


//Ficheros incluidos
$v=get_included_files();

//Ficheros requeridos.
$vr=get_required_files();

print_r($v);
echo "<br><br>";
print_r($vr);