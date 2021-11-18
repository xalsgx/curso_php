<?php

/* Operadores de comparación:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

*/

/* Operadores lógicos:

&& - Evalua que se cumplan todas las condiciones
|| - Evalua que se cumpla una de las condiciones
xor - Evalua que se cumpla solo una de las condiciones

*/

$edad = 18;

if($edad >= 18){
    //Instrucciones
    echo '<h1>' . 'Aprobado' . '</h1>';
}

else if($edad < 18){
    echo '<h1>' . 'Denegado' . '</h1>';
}

?>