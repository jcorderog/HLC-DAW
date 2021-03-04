<?php

    $color = "verde";

    $$color = "es horrible";

    print $color . "<br>" . $verde . "<br>";

    $color = "rojo";

    $$color = "es feo";

    /* 
        Al sobreescribir la variable color, la variable de la variable color 
        sigue teniendo el mismo nombre, para que se cambie, abria que sobreescribirla también.
    */

    print $color . "<br>" . $verde . "<br>" . $rojo;

?>