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
    ?>

</body>
</html>