<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        /* String */
        
        /* Variable are sequences of characters that are delimeted of 
        simple quotation or double quotes */

        $String = "Variable";
        var_dump($String);

        /* Integer */
        
        // Numbers, positive or negative */
        $integer = 42;
        var_dump($integer);

        /* Boolean */

        // Are represent in a true of false value */
        $bollean = true;
        var_dump($bollean);

        /* Compound types */

        // These types are formed by multiple values ​​or structures.
        $array = [1,2,3, "Text"];
        var_dump($array);

        /* Object */

        // Class Instances defined by user
        class Person {

            public $name;
            public function __construct($name) {
                $this -> name = name;
            }
        }

        $object = new Person("Steve");  
        var_dump($object);

        /* Especial Types */

        // These represent references of special states in PHP
        $null = null;
        var_dump($null);

        /* Resource */

        // References to external resources, such as database connections or open files.
        $file = fopen("example.txt", "r");
        var_dump($file);

        /* New and other types (PHP 7+) */
        function hello() {
            echo "Hello";
        }

        $calleble = "hello";
        $calleble();

        // Declarations Types
        
        $a = 5;
        $b = "Test";

        var_dump($a, $b);
        var_dump('test' . 5);
        var_dump('5' + '10');

    ?>

</body>
</html>