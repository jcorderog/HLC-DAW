<?php 
# definimos un array escalar utilizando la sintaxis
# nombre del array=array (valores de los elemento separados por comas)
# si los valores fueran números no sería necesario encerrarlos entre comillas

$a=array("a","b","c","d","e");

/* defiano ahora un nuevo array, esta vez asociativo
   utilizando la sintaxis clave => valor
   tal como puedes ver */

$b=array(
 "uno"  =>"Primer valor",
 "dos"  =>"Segundo valor",
 "tres" =>"Tecer valor",
);

# establecmos el bucle que leerá el array $a
# recogiendo en la variable $pepe los valores extraidos
# y escribimos lo valores

foreach($a as $pepe) {
echo $pepe,"<br>";
};

# repetimos el mismo proceso, ahora con $b que es un array asociativo

foreach($b as $pepe) {
echo $pepe,"<br>";
};
?>