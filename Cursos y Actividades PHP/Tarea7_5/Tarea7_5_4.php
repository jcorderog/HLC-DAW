<?php 
    $A=$_GET["a"];
    ($a==8) ? ($B="El valor de a es 8"): ($B="El valor de a no es 8");
    echo $B;
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