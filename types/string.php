<?php
echo 'Esto es una cadena sencilla';

echo 'También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así';

// Resultado: Arnold una vez dijo: "I'll be back"
echo 'Arnold una vez dijo: "I\'ll be back"';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\*.*?';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\*.*?';

// Resultado: Esto no se expandirá: \n una nueva línea
echo 'Esto no se expandirá: \n una nueva línea';

// Resultado: Las variables $tampoco se $expandirán
echo 'Las variables $tampoco se $expandirán';

/**
 * Comillas dobles
 * Detecta: \n \r \t \v....
 */

echo "\nEsto sí detecta los saltos de línea.\n";

/**
 * Heredoc
 */

$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
EOD;

/* Un ejemplo más complejo con variables. */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$nombre = 'MiNombre';

echo <<<EOT
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

/**
  Mi nombre es "MiNombre". Estoy escribiendo un poco de Foo
  Ahora, estoy escribiendo un poco de Bar2.
  Esto debería mostrar una 'A' mayúscula: A
 */

var_dump(array(<<<EOD
foobar!
EOD
));

// In constants

// Variables estáticas
function foo()
{
    static $bar = <<<LABEL
Nada aquí...
LABEL;
}

// Propiedades/constantes de clase
class foo
{
    const BAR = <<<FOOBAR
Ejemplo de constante
FOOBAR;

    public $baz = <<<FOOBAR
Ejemplo de propiedad
FOOBAR;
}

// Se puede entrecomillar el identificador (v 5.3)

echo <<<"FOOBAR"
¡Hola Mundo!
FOOBAR;

/**
 * Nowdoc
 */

$str = <<<'EOD'
Ejemplo de un string
expandido en varias líneas
empleando la sintaxis nowdoc.
EOD;

/* Un ejemplo más complejo con variables. */
class foo
{
    public $foo;
    public $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$nombre = 'MiNombre';

echo <<<'EOT'
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

/*
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
*/

// With Heredoc -> error

class foo {
  public $bar = <<<'EOT'
bar
EOT;
}