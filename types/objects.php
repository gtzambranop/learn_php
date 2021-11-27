<?php
$bl = "<br>";

class foo
{
    function hacer_algo()
    {
        echo "Haciendo algo.";
    }
}

$bar = new foo;
$bar->hacer_algo();

echo "Conversión a objeto".$bl;

$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // muestra 'bool(false)'
var_dump(key($obj)); // muestra 'int(1)'

echo $bl."Scalar".$bl;

$obj = (object) 'ciao';
echo $obj->scalar;  // muestra 'ciao'