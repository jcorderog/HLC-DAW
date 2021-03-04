<?php 
    $A=$_GET["a"];

    if ($a==5){ ?>

<H1>Esto no ha sido interpretado por PHP</H1>


<?php } ?>

<?php

    if ($a==5): ?>
<H2>Esto tampoco sido interpretado por PHP</H2>

<?php endif; 
?>

<html>

<body>
    <form action="Tarea7.5.1.php" method="get">
        Variable A: <input type="a" name="a"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>