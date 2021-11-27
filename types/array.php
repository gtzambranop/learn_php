<?php
$bl = "<br>";

$array = array(
  "foo" => "bar",
  "bar" => "foo",
);

// a partir de PHP 5.4
$array = [
  "foo" => "bar",
  "bar" => "foo",
];

/**
 * Como todas las claves en el ejemplo anterior se convierten en 1,
 * los valores serán sobrescritos en cada nuevo elemento,
 * por lo que el último valor asignado "d" es el único que queda.
 */

echo "Amoldamiento de tipo y sobrescrituras<br>";

$array = array(
  1    => "a",
  "1"  => "b",
  1.5  => "c",
  true => "d",
);
var_dump($array);

echo "<br><br>Claves Mixtas<br>";

$array = array(
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
);
var_dump($array);

echo "<br>";

$array = array("foo", "bar", "hello", "world");
var_dump($array);

echo "<br><br>Claves en algunos elementoss<br>";

$array = array(
  "a",
  "b",
6 => "c",
  "d",
);
var_dump($array);

echo "<br><br>Acceso a Elementoss<br>";

$array = array(
  "foo" => "bar",
  42    => 24,
  "multi" => array(
      "dimensional" => array(
          "array" => "foo"
      )
  )
);

var_dump($array["foo"]);
echo "<br>";
var_dump($array[42]);
echo "<br>";
var_dump($array["multi"]["dimensional"]["array"]);


$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // Esto es lo mismo que $arr[13] = 56;
                // en este punto de el script

$arr["x"] = 42; // Esto agrega un nuevo elemento a
                // el array con la clave "x"

unset($arr[5]); // Esto elimina el elemento del array

unset($arr);    // Esto elimina el array completo


echo "<br><br>Eliminar y reindexar<br>";

// Crear un array simple.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
$array[] = 6;
print_r($array);

// Re-indexar:
$array = array_values($array);
$array[] = 7;
print_r($array);


$array = array(1, 2);
$count = count($array);

for ($i = 0; $i < $count; $i++) {
  echo "$bl Revisando $i: $bl";
  echo "Mal: " . $array['$i'] . $bl;
  echo "Bien: " . $array[$i] . $bl;
  echo "Mal: {$array['$i']}$bl";
  echo "Bien: {$array[$i]}$bl";
}

