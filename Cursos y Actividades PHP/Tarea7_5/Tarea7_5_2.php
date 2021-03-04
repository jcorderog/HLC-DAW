<?php
    $A=$_GET["a"]; $B= $_GET["b"];

    if ($A==$B){ 
        print ("A es igual B");
        echo "<br>";
            echo "Este if tiene varias intrucciones contenidas entre llaves<br>";
        }

    if ($A==$B): 
        print ("A es igual B");
        echo "<br>";
            echo "Hemos cambiado {} por : endif";
    endif;
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