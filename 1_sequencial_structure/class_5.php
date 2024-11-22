<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        $vetor =  array('Palio', 'Gol', 'Fiesta', 'Corsa');

        define('BD_URL', 'address_bd_dev');
        define('BD_USER', 'user_bd_dev');
        define('BD_PSW', 'password_bd_dev');

        echo BD_URL . '<br/>';
        echo BD_USER . '<br/>';
        echo BD_PSW . '<br/>';

        echo '<br>';
        echo '<br>';
        echo var_dump($vetor);

        echo "<br>";
        echo "<br>";
        print_r($vetor);

        // Dynamic Variables

        // $variable = 'name';
        // $$variable = 'Maria';

        // echo "<br>";
        // echo "<br>";
        // echo $$variable;

        // Or we can do in this form

        $variable = 'name';
        $persons = ['name' => 'Maria'];
        echo "<br>";
        echo "<br>";
        
        echo $persons[$variable];

        // Variables Atribution 
        /*$a = 5;
        $b = $a;
        $b = 10;
        echo "<br>";
        echo "<br>";
        echo $a; // resultado = 5
        echo '; '; // espaço
        echo $b; // resultado = 10 */

        // Variable reference in memory
             
        /* $a = 5;
        $b = &$a;
        echo "<br>";
        echo "<br>";
        echo $a; // resultado = 5
        echo '; '; // espaço
        echo $b; // resultado = 10 */

        // Object reference

        $a = new stdClass;
        $a -> name = "Maria"; // Attribute defined
        $b = $a; // Create the replica
        $b -> name = "Joana"; // Attribute defined
        
        print($a -> name); // Result = Joana
        print(' '); // Space
        print($b -> name); // Result = Joana

    ?>

</body>
</html>