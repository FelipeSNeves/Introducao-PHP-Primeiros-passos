<?php

    // Exibir numeros impares de 0 a 100
    for($contador = 0; $contador <= 100; $contador++) {
        if($contador % 2 > 0) {
            echo "# $contador " . PHP_EOL;
        }
    }


?>