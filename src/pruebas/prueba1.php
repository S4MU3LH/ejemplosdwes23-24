<?php
    $variable1 = 15;
    $variable2 = 30;

    $variable3 = $variable1 + $variable2;

    echo "El resultado de la suma es: $variable3";
    echo "<br>";

    echo "El resultado de la suma de $variable1 + $variable2 es: $variable3";
    echo "<br>";

    echo 'El resultado de la suma de $variable1 + $variable2 es: '.$variable3;
    echo "<br>";

    echo "El resultado de la suma de las dos variables es: ".($variable1+$variable2);

    if ($variable1<$variable2){
        echo "La variable 1 es menor que la 2";
    }else if ($variable1>$variable2){
        echo "La variable 1 es mayor que la 2";
    }else{
        echo "Las variables son iguales";
    }

    switch ($variable1) {
        case 10:
            echo "La variable tiene el valor de 10";
            break;
        default:
            echo "No es 10";
    }

for($i = 0; $i < ; $i++) {
    echo "El valor de la variable es $i";
    }

    do{
        echo "esto es un bucle do-while";
    }while($variable1<100);

    while(true){
        echo "Samuel es el puto amo";
        break;
    }