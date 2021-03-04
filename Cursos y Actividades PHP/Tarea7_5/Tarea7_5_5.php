<?php
    $A=$_GET["a"];
    if ($a==1){
    echo "El valor de la variable A es 1";
    }elseif ($a==2){
    echo "El valor de la variable A es 2";
    }elseif ($a==3){
    echo "El valor de la variable A es 3";
    }else{
    echo "La variable A no es 1, ni 2, ni 3";
    }
?>

<?php 
    $a=1;
    if ($a==1): ?>
<H1>A es igual a 1</H1>
<? elseif($a==2): ?>
<H1>A es igual a 2</H1>
<? elseif($a==3): ?>
<H1>A es igual a 3</H1>
<? else: ?>
<H1>A no es igual ni a 1, ni a 2, ni a 3</H1>
<?php endif;
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