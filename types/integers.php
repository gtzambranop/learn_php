<?php
$a = 1234; // número decimal
$a = -123; // un número negativo
$a = 0123; // número octal (equivale a 83 decimal)
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
$a = 0b11111111; // número binario (equivale al 255 decimal)

/**
 * Desbordamiento de enteros en sistemas de 32 bit
 */


$número_grande = 2147483647;
var_dump($número_grande);                    // int(2147483647)

$número_grande = 2147483648;
var_dump($número_grande);                    // float(2147483648)

$millón = 1000000;
$número_grande =  50000 * $millón;
var_dump($número_grande);                    // float(50000000000)

/**
 * Desbordamiento de enteros en sistemas de 64 bit
 */

$número_grande = 2147483647;
var_dump($número_grande);                    // int(2147483647)

$número_grande = 2147483648;
var_dump($número_grande);                    // float(2147483648)

$millón = 1000000;
$número_grande =  50000 * $millón;
var_dump($número_grande);                    // float(50000000000)


var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)