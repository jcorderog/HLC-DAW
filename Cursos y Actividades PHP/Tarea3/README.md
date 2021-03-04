### Tarea 3.- Constantes

Una constante es un valor –un número o una cadena– que no va a ser modificado a lo largo del proceso de ejecución de los scripts que contiene un documento.

Para mayor comodidad, a cada uno de esos valores se le asigna un nombre, de modo que cuando vaya a ser utilizado baste con escribir su nombre.

Cuando ponemos nombre a una constante se dice que definimos esa constante.

En PHP las constantes se definen mediante la siguiente instrucción:

define("Nombre","Valor")

Los valores asignados a las constantes se mantienen en todo el documento, incluso cuando son invocadas desde una función.

No es necesario escribir entre comillas los valores de las constantes cuando se trata de constantes numéricas.

Si se realizan operaciones aritméticas con constantes tipo cadena, y su valor comienza por una letra, PHP les asigna valor cero.

Si una cadena empieza por uno o varios caracteres numéricos, al tratar de operarla aritméticamente PHP considerará únicamente el valor de los dígitos anteriores a la primera letra o carácter no numérico.

El punto es considerado como no numérico.

Tal como puedes ver en el código fuente del ejemplo (Tarea3.php), es posible definir constantes a las que se asigne como valor el resultado de una operación aritmética.

TAREA: Escribe un script en el que se definan dos constantes, una numérica y otra de cadena y en el que –mediante la las opciones print y echo– aparezca en la página web resultante un comentario sobre el tipo de cada una de ellas seguido de su valor. Intenta  conseguir que los elementos concatenados aparezcan en la presentación separados por un espacio. ¡Observa el código fuente!
