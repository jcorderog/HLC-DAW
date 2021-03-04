<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <!-- Para que se envíe el fichero con el formulario es necesario añaidr
    la claúsula enctupe-->
    <form method=post action=postfichero.php enctype="multipart/form-data">
        Nombre: <input type="text" name="usuario">
        <br>
        Fichero: <input type="file" name="Fichero">
        <input type ="Submit" name"Enviar" value="Enviar">
        
    </form>
    
</body>
</html>