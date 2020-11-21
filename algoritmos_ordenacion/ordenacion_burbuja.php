<?php
function burbuja($num){
    for($i=0; $i < count($num)-1; $i++){ //for para las PASADAS dependiendo el arreglo (-1)
    
        for($j=0; $j < count($num)-1; $j++){//for COMPARANDO dependiendo el arreglo
                                            //menos el ultimo(-1) numero
                                        //porque no lo podemos compara con otro numero siguiente
                                        
            if($num[$j] > $num[$j+1]){//si primer numero es MAYOR a numero siguiente
                
                $k = $num[$j+1]; // guardamos numero siguiente en variable temporal->$k
                $num[$j+1] = $num[$j]; // numero  siguiente ahora pasa a ser primer numero
                $num[$j] = $k;      // primer numero ahora pasa a ser numero siguiente
            }
        }
    }
    return $num;
}
//ejemplo de arreglo con numeros desordenados

$desordenados = array(2,1,7,6,8,9); //longitud de 9
                    //0,1,2, 3, 4, 5, 6
echo "Estos son los numero desordenados<br>";
    for($i=0;$i<count($desordenados);$i++){
        echo $desordenados[$i]." ";
    }
?><br><?php 
$ordenados = burbuja($desordenados);
echo "Estos son los numero ordenados<br>";
    for($i=0;$i<count($ordenados);$i++){
        echo $ordenados[$i]." ";
    }
    
?>