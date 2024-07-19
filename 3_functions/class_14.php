<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        $db = 0;
    
        function messageWelcome($db) {
            $db = ($db <= 1) ? 'Hello function <br />' : "Sorry, the function is not 
            working because the variable doesn't make any sense";
            
            return $db;
        }

        echo messageWelcome($db);

        function calculateLandArea($width, $lenght) {

            $area = $width * $lenght;

            return $area;
        }

       echo calculateLandArea(5, 25);
    ?>

</body>
</html>
