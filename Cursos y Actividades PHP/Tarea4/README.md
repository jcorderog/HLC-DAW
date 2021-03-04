### Tarea 4.- Variables

En PHP todos los nombres de variable tienen que empezar por el símbolo $.

Las nombres de las variables han de llevar una letra inmediatamente después del símbolo $, $pepe1 es un nombre válido, pero $1pepe no es un nombre válido.

Para PHP las letras mayúsculas y las minúsculas son distintas. La variable $pepe es distinta de $Pepe.

En PHP no es necesario definir el tipo de variable, por lo tanto, una misma variable puede contener una cadena de caracteres en un momento del proceso y, posteriormente, un valor numérico, susceptible de ser operado matemáticamente.

PHP no requiere una definición previa de las variables. Se definen en el momento en que son necesarias y para ello basta que se les asigne un valor. 

La sintaxis es esta:

$variable=valor;

El valor puede ser una cadena (texto o texto y números que no requieren ser operados matemáticamente) o sólo un número. En el primero de los casos habría que escribir el valor entre comillas.

Los valores de una variable definida en cualquier parte de un script –siempre que no sea dentro de una función– pueden ser utilizados desde cualquier otra parte de ese script, excepto desde dentro de las funciones que contuviera el propio script o desde las que pudieran estar contenidas en un fichero externo.

Si una variable es definida dentro de una función sólo podrá ser utilizada dentro esa función.

Si en una función aludimos a una variable externa a ella PHP considerará esa llamada como si la variable tuviera valor cero (en caso de ser tratada como número) o una cadena vacía ("" es una cadena vacía).

Igual ocurriría si desde fuera de una función hiciéramos alusión a una variable definida en ella. 

Si definimos dos variables con el mismo nombre, una dentro de una función y otra fuera, PHP las considerará distintas. La función utilizará –cuando sea ejecutada– sus propios valores sin que sus resultados modifiquen la variable externa.

Lo comentado anteriormente, admite algunas excepciones. Las funciones pueden utilizar valores de variables externas a ellas pero ello requiere incluir dentro de la propia función la siguiente instrucción:

global nombre de la variable;

Por ejemplo: global $a1;

En una instrucción –global– pueden definirse como tales, de forma simultánea, varias variables. Basta con escribir los nombres de cada una de ellas separados por comas.

P. ej.: global $a1, $a2, $a3;

A partir de la versión 4.1.0 de PHP se ha creado un nuevo tipo de variables capaces de comportarse como globales sin necesidad de que se definan como tales.

Estas variables que no pueden ser creadas por usuario, recogen de forma automática información muy específica y tienen nombres preasignados que no pueden modificarse.

Las estudiaremos un poco más adelante. Por ahora, sólo citar los nombres de algunas de ellas: $_SERVER, $_POST, $_GET o $_ENV son los de las más importantes.

TAREA: Escribe un script en el que una misma variable tome dos valores distintos sin utilizar ninguna función. Luego añade al script una función que presente ese mismo nombre de variable con un valor distinto distinto de los anteriores, comprobando que esta ultima opción no modificó el último valor de aquellos.
