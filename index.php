<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executar</title>
</head>

<body>
    <?php
        echo "<h2>Tipos Escalares</h2>";
        
        $character = "Hello"; // String
        var_dump($character);
        echo "<br />";

        $number = 42; // Integer
        var_dump($number);
        echo "<br />";
        
        $floatNumber = 3.14; // Float
        var_dump($floatNumber);
        echo "<br />";
        
        $isTrue = true; // Boolean
        var_dump($isTrue);
        echo "<br />";
        
        $isNull = null; // NULL
        var_dump($isNull);
        echo "<br />";
        echo "<hr />";
        
        echo "<h2>Tipos Compostos</h2>";
        $fruits = array("Apple", "Banana", "Orange"); // Array
        var_dump($fruits);
        echo "<br />";
        class Person {
            public $name;
            public $age;
        }
    
        $person = new Person(); // Object
        $person->name = "Edson Lopes";
        $person->age = 23;
        var_dump($person);
        echo "<br />";
        echo "<hr />";
        
        echo "<h2>Tipos Especiais</h2>";
        echo "<hr />";

    ?>
</body>

</html>