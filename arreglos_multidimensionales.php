<?php

$amigos = array(
    array('Alejandro', 24), 
    array('Luigi', 25), 
    array('Adan', 31)
);

#Alejandro
echo 'Nombre: ' . $amigos[0][0] . '</br>'; 
echo 'Edad: '. $amigos[0][1] . '</br>' . '</br>';

#Luigi
echo 'Nombre: ' . $amigos[1][0] . '</br>'; 
echo 'Edad: '. $amigos[1][1] . '</br>' . '</br>';

#Adan
echo 'Nombre: ' . $amigos[2][0] . '</br>'; 
echo 'Edad: '. $amigos[2][1] . '</br>' . '</br>';

?>