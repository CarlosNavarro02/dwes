<?php


    function suma ($a , $b) {
        global $var1 , $var2;
        echo "<br> La variable dentro de la funcion 1 y funcion 2 es" . $var1 . " y " . $var2;
        return $a + $b;
        //definicion variable estatica
    static $varestatica = 0;
    echo "<br> EL valor de la var estatica es : " . $varestatica;
    $varestatica++;
    return $a + $b;
    }
    echo "<br> L variable a y  b son :" . $a , " y " . $b;
    echo "<br> Llamada a suma 1 vez: " . suma(3,5);
    echo "<br> Llamada a suma 2 vez: " . suma(3,5);
    echo "<br> Llamada a suma 3 vez: " . suma(3,5);

    function restar ($op1 , $op2) {
        $op = $op1 - $op2;
        return $op;
    }
    $var1 = 6;
    $var2 = 7;
    echo "<br> LLamada por valor : " , restar($var1 , $var2);

    