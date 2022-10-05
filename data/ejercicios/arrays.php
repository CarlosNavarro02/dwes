<?php
    // los elementos son heterogéneos
    $miarray = array(1,"hola", 3.0,false);

    echo "<br> Elemento 2 del array : " . $miarray[2];
    //mostrar
    //foreach, var_dump , print_r;
    foreach($miarray as $elmto){
        echo"<br>el elmto es: " . $elmto;
     }

     print_r($miarray);
     echo"<br>";
     var_dump($miarray);

     echo"<br> longitud del array: " .count($miarray);

     $array2 = [
         3,
         2,
         5,
         9
     ];
    //con el & se modifican los elementos de la variable, sin el, solo se modifican dentro del bucle.
        foreach($array2 as &$elto){
            $elto = $elto * 2;
            echo "<br> valor de elto : " . $elto;
        }
        print_r($array2);

        $array2[] = 15;
        echo "<br>";
        print_r($array2);

        echo"<br>";
        unset($array2[2]); //unset se usa para borrar una variable. En este caso se carga la posición entera.
        print_r($array2);

        echo "<br> y la posicion 2? : " . $array2[2];

        $array2[] = 99;
        echo "<br>";
        print_r($array2);

        $array2[2] = 13;
        echo"<br>";
        print_r($array2);

        echo"<br>";
        echo"<br> y QUE DEMONIOS TIENE la posicion 2? : " . $array2[2];

        echo"<br> MOSTRAR CLAVE Y VALOR DE ARRAY: ";
        foreach($array2 as $key => $value){
            echo"<br> Clave : " . $key . " y valor: " . $value;
        }
        
        $persona = array (
            "edad" => 23 ,
            "peso" => 70,
            "casado" => 23,
            "dni" => "73027524V",
            8 => "nss"
        );

        foreach ($persona as $key => $value) {
        echo "<br> Clave:" . $key . " y valor : " . $value;           
        echo "<br>";
        print_r($persona);
        }
        