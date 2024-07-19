<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

        p {
            font-size: 20px !important;
        }


    </style>
</head>
<body>

    <?php 

        $age = 17;
        $weight = 59.5;

        $to_donate_blood = ($age >= 16 && $weight >= 50) ? 
        "Meets the requirements!" : "Don't meet the requirements!";
    ?>

    <p>Meets the requirements? <?= $to_donate_blood ?> </p>

</body>
</html>