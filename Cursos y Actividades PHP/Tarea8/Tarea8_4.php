<? include_once("ejemplo2.inc") ?>
<? Encabezado() ?>
<? include_once("ejemplo1.inc") ?>
<? Pie() ?>

Lista de fichero utilizados por include
<? 
$z= get_included_files();
foreach($z as $clave=>$valor) {
echo "Clave: ",$clave,"  Valor: ",$valor,"<br>";
};
?>