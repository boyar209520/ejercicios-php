<?php
    //sacar promedio
    $notasDeAlumnoUno = array(2, 3, 3, 5, 7, 10);//ejemplo de array
    echo "Las notas del año para Fulanito es de: ";
    for($i=0;$i<count($notasDeAlumnoUno);$i++){
        echo $notasDeAlumnoUno[$i].", ";
    }
    echo "<br>";
    //Esta funcion devuelve el promedio de un array con numeros
    function promedio($notas){
        for($i = 0; $i<count($notas)+1; $i++){
            $cantidad = $i; 
        }
        $sumaDeNotas = array_sum($notas); //array_suma -> suma todos los numeros dentro del arreglo
        
        $resultado = $sumaDeNotas / $cantidad;
        
        return $resultado;
    }
    echo "El promedio del alumno Fulanito es de: ".promedio($notasDeAlumnoUno)."<br><br>";
?>


<!--Mas facil en php seria -->

<?php
    //sacar promedio
    $notasDeAlumnoDos = array(2, 2, 1, 5, 7, 8);
    echo "Las notas del año para Menganito es de: ";
    for($i=0;$i<count($notasDeAlumnoDos);$i++){
        echo $notasDeAlumnoDos[$i].", ";
    }
    echo "<br>";
    //Esta funcion devuelve el promedio de un array con numeros
    function promedioDos($notas){
        $cantidad = count($notas); //cuenta cuantos valores hay dentro del arreglo
        $sumaDeNotas = array_sum($notas); //array_suma -> suma todos los numeros dentro del arreglo
        
        $resultado = $sumaDeNotas / $cantidad;
        
        return $resultado;
    }
    echo "El promedio del alumno Menganito es de ".promedioDos($notasDeAlumnoDos);
?>