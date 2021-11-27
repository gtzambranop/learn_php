<?php
$bool_1 = TRUE;   // un valor booleano
$bool_2 = FALSE;

echo gettype($bool_1); // imprime: boolean


// Si este valor es un entero, incrementarlo en cuatro
if (is_bool($bool_1)) {
    echo '<br>'.'Es booleano';
}