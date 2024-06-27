<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        /*
        $color[1] = "red"; 
        $color[2] = "Green"; 
        $color[3] = "Blue";
        $color["teste"] = 1;
        */

        // The same similarity would be like

        $color = array(1 => "Red", 2 => "Green", 3 => "Blue", "Test" => 1);
    ?>

    <?= $color ?>

</body>
</html>