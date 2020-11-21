<?php

// Saber si un numero es par o impar

function parOImpar($num){
    if($num % 2 == 0){
        echo "Es número par";
        
    }else {
        echo "Es número impar";
    }
}

echo parOImpar(5);


?>
