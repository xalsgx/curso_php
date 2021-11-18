<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

//Recorrido con for
/*for($i = 0; $i < count($meses); $i++){
    echo '<li>' . $meses[$i] . '</li>';
}*/

//Recorrido con while
$cont = 0;
while ($cont < count($meses)) {
    echo '<li>' . $meses[$cont] . '</li>';

    $cont++;
}

?>