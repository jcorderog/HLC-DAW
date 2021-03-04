### Tarea 5.- Constantes predefinidas

PHP dispone de algunas constantes predefinidas que no requieren la instrucción:

define("Nombre","Valor")

Algunas de ellas son estas:

__FILE__

Recoge el nombre del fichero que se está ejecutando y la ruta completa de su ubicación en el servidor.

__LINE__

Recoge el número de línea (incluidas líneas en blanco) del fichero PHP cuyos scripts está interpretando. Puede resultar muy útil para depurar programas escritos en PHP.

PHP_OS

Recoge información sobre el Sistema Operativo que utiliza el servidor en el que se está interpretando el fichero.

PHP_VERSION

Recoge la versión de PHP que está siendo utilizada por el servidor.

¡Cuidado!

Por si existieran dudas –por problemas de visualización– tanto FILE como LINE tienen que llevar dos guiones bajos delante y otras dos detrás.

TAREA: Escribe un script que construya una  pequeña página web en la que aparezca el texto "Hola mundo" (incluidas las comillas) . Trata de que todas las etiquetas HTML que utilices estén recogidas en variables PHP, de manera que no exista ninguna línea en el código fuente de la página que esté fuera de las etiquetas <?php ... ?>
