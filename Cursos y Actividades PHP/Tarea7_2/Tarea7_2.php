<?php

$a = "123";
$b = 123;
$c = "1234";
$d = "asdf";
$e = "123";
$f = 124;
$g = 122;

print('Variables: <br> a = "'.$a.'" <br> b= '.$b.' <br> c= "'.$c.'" <br> d= "'.$d.'" <br> e= "'.$e.'"<br> f= '.$f.'<br> g= '.$g.'<br><br>');

if ($a == $b) {
    print("(a == b) == 1 --> La variable a y la variable b son iguales pero no estrictamente.<br>");
}

if(($a == $c) == 0) {
    print("(a == c) == 0 --> La variable a y la variable c no son iguales.<br>");
}

if($a === $e) {
    print("(a === e) == 1 --> La variable a y la variable e son iguales estrictamente.<br>");
}

if(($a === $b) == 0) {
    print("(a === b) == 0 --> La variable a y la variable b no son iguales estrictamente.<br>");
}

if($a != $d) {
    print("(a != d) == 1 --> La variable a y la variable d son distintas.<br>");
}

if(($a != $e) == 0) {
    print("(a != e) == 0 --> La variable a y la variable e no son distintas.<br>");
}

if($b < $f) {
    print("(b < f) == 1 --> La variable b es menor que la variable f.<br>");
}

if(($f < $b) == 0) {
    print("(f < b) == 0 --> La variable f no es menor que la variable b.<br>");
}

if($f > $b) {
    print("(f > b) == 1 --> La variable f es mayor que la variable b.<br>");
}

if(($b > $f) == 0) {
    print("(b > f) == 0 --> La variable b no es mayor que la variable f.<br>");
}

if ($a >= $b) {
    print("(a >= b) == 1 --> La variable a al pasar a entero es mayor o igual que la variable b.<br>");
}

if (($a >= $f) == 0) {
    print("(a >= f) == 0 --> La variable a al pasar a entero no es mayor o igual que la variable f.<br>");
}

if ($a <= $b) {
    print("(a <= b) == 1 --> La variable a al pasar a entero es menor o igual que la variable b.<br>");
}

if (($f <= $a) == 0) {
    print("(f <= a) == 0 --> La variable f al pasar a entero no es menor o igual que la variable a.<br>");
}

?>