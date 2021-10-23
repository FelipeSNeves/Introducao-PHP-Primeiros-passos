<?php
    
    $altura = 1.69;
    $peso = 65;
    $imc = $peso / ($altura * $altura);
    
    if($imc < 18.5) {
        echo "Magreza - Nível 0" . PHP_EOL;
    } elseif($imc >= 18.5 && $imc <= 24.9) {
        echo "Normal - Nível 0" . PHP_EOL;
    } elseif($imc >= 25.0 && $imc <= 29.9 ) {
        echo "Obesidade - Nível 1" . PHP_EOL;
    } elseif($imc >= 30.0 && $imc <= 39.9 ) {
        echo "Obesidade - Nível 2" . PHP_EOL;
    }elseif($imc > 40.0 ) {
        echo "Obesidade - Nível 3" . PHP_EOL;
    }else{
        echo "Dados Inválidos";
    }


?>