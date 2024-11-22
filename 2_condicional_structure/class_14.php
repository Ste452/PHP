<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

    $show_name = TRUE;

    if ($show_name) {
      echo 'Steve';
    }

    echo "<br>";
    echo "<br>";


    // Testing if and else

    $relative_humidity = 91; // Declaring numeric variable

    // If is bigger then 90. Returns a boolean

    $its_going_rain = ($relative_humidity > 90);

    // Testing if "$its_going_rain" is true
    if ($its_going_rain) {
      echo 'Can be rain today or tomorrow';
    }

    echo "<br>";
    echo "<br>";

    // Numeric Tips

    $a = 1234; // Decimal number
    $b = -123; // Negative number
    $c = 0123; // Octal number (Equivalent to 83 in decimal)
    $d = 0x1A; // Hexadecimal number (Equivalent a 26  in decimal)
    $e = 1.234; // Floating pont 
    $f = 4e23; // Scientific notation

    echo $a . "<br>" . $b . "<br>" . $c . "<br>" . $e . "<br>" . $f;
    
    echo "<br>";
    echo "<br>";

    // Array Tip

    $cars = array('Palio', 'Corsa', 'Gol');
    echo $cars[1];

    echo "<br>";
    echo "<br>";

    // Object Tip

    $car = new stdClass; // Inicialize Class
    $car -> model = 'Palio'; // Property Attribute of the main class
    $car -> year = 2002; // Property Attribute of the main class
    $car -> color = 'Blue'; // Property Attribute of the main class
    print_r($car);

    echo "<br>";
    echo "<br>";

    print $car -> model . ' ';
    print $car -> year . ' ';
    print $car -> color . ' ';

?>

</body>
</html>