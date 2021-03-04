<?php
 
    $A=$_GET["a"]; $B= $_GET["b"];
    if ($A==$B)
        print ("A es igual B");


    if ($A<$B)
        print ("A es menor que B");
        print("<br>A no es menor que b, pero esto saldrá<br>");
        print("Esta es la segunda instrucción. No la condicionará el if");
?>

<html>

<body>
    <form action="Tarea7.5.1.php" method="get">
        Variable A: <input type="a" name="a"><br>
        Variable b: <input type="b" name="b"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>