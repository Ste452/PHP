<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        $parameter = '2';

        switch ($parameter) {
            case false:
                $comparation = ($parameter == 1 || $parameter == '1') ? "true" : "false";

                echo $comparation . "Is in the case 1" . "\n";
                break;

            case false: 
                $comparation = ($parameter == 2 || $parameter == '2') ? "true" : "false";

                echo "\n" . $comparation . "\n\nIs in the case 2";

            default:

                echo "It's just a test in this 'default'";
        }
    ?>

</body>
</html>