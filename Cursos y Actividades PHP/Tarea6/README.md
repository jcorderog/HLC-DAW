### Tarea 6.- Otras variables

Cuando hablábamos de las variables, hay que referirse a su ámbito y comentábamos que las variables definidas dentro de una función pierden sus valores en el momento en el que abandonemos el ámbito de esa función, es decir, cuando finaliza su ejecución.

El ámbito en el que hubiera sido definida fuera externo a una función los valores sólo se perderían – temporalmente– mientras durara la eventual ejecución de las instrucciones de aquella y que, una vez acabado ese proceso, volvían a recuperar sus valores.

Bajo estas condiciones, si invocáramos repetidamente la misma función obtendríamos cada vez el mismo resultado.

Las posibles modificaciones que pudieran haberse efectuado (a través de las instrucciones contenidas en la función) en el valor inicial de las variables, se perderían cada vez que abandonáramos la función con lo cual, si hicéramos llamadas sucesivas, se repetirían tanto el valor inicial como el resultado.

#### Variables estáticas

Para poder conservar el último valor de una variable definida dentro de una función basta con definirla como estática. La instrucción que permite establecer una variable como estática es la siguiente:

static nombre = valor;

P. ej: si la variable fuera $a y el valor inicial asignado fuera 3 escribiríamos:

static $a=3;

La variable conservará el último de los valores que pudo habérsele asignado durante la ejecución de la función que la contiene. No retomará el valor inicial hasta que se actualice la página.

#### Variables de variables

Además del método habitual de asignación de nombres a las variables -poner el signo $ delante de una palabra-, existe la posibilidad de que tomen como nombre el valor de otra variable previamente definida.

La forma de hacerlo sería esta:

$$nombre_variable_previa;

Veamos un ejemplo.

Supongamos que tenemos una variable como esta:

$color="verde";

Si ahora queremos definir una nueva variable que utilice como nombre el valor (verde) que está contenido en la variable previa ($color), habríamos de poner algo como esto:

$$color="es horrible";

¿Como podríamos visualizar el valor de esta nueva variable?

Habría tres formas de escribir la instrucción:

print $$color;

print ${$color};

print $verde;

Cualquiera de las instrucciones anteriores nos produciría la misma salida: es horrible.

Podemos preguntarnos ¿cómo se justifica que existan dos sintaxis tan similares como $$color y ${$color}? ¿Qué pintan las llaves?. La utilización de las llaves es una forma de evitar situaciones de interpretación confusa. Supongamos que las variables tienen un nombre un poco más raro. 

Por ejemplo que $color no se llama así sino $color[3] (podría ser que $color fuera un array –una lista de colores– y que esta variable contuviera el tercero de ellos).

TAREA: 1.- ¿Qué ocurre cuando la variable previa cambia de valor?. 
