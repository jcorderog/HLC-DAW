<?php
$filas = 1; $columnas = 6; $numeros;

print ("<table border=1 width=400 align=center>");
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columnas; $f++) { 
        echo "<td>";
        print ( $random = rand(1,49));
        print ("</td>");
    }
    echo "</tr>";   
}
    echo"</table>"; 
?>