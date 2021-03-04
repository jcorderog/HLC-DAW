<?php 
$a=array("a","b","c","d","e");
 $b=array(
 "uno"  =>"Primer valor",
 "dos"  =>"Segundo valor",
 "tres" =>"Tecer valor",
);

# en este caso extraeremos índices y valores de ambos arrays
# usaremos $pepe para recoger los índices y $pepe para recoger los valore
# y separaremos ambas variables por => que es el separador obligatorio
# para estos casos

foreach($a as $pepe=>$pepa) {
       echo "Indice: ",$pepe,"  Valor: ",$pepa,"<br>";
};
foreach($b as $pepe=>$pepa) {
       echo "Indice: ",$pepe,"  Valor: ",$pepa,"<br>";
};
?>