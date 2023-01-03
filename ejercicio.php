<?php

function triangulo(int $a, int $b, int $c){
    if ($a==$b || $a==$c || $b==$c){
        echo "El triángulo es isosceles<br>";
    } else {
        echo "El triángulo no es isosceles<br>";
    }
}

triangulo(12,5,16); //Devuelve: El triángulo no es isosceles

triangulo(3,5,3); //Devuelve: El triángulo es isosceles
triangulo(3,6,6); //Devuelve: El triángulo es isosceles
triangulo(7,7,3); //Devuelve: El triángulo es isosceles

?>