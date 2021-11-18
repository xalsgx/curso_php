<?php

$alex = array(
    'Telefono'=>6641201864,'Edad'=>24,
    'Apellido'=>'Salcido','Pais'=>'México'
);

foreach($alex as $dato => $value){
    echo '<li>' . $dato . ': ' . $value . '</li>';
}

?>