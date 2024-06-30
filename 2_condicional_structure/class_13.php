<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h3>Post-increment</h3>
    
    
    <?php 
    
        $a = 7;
        
        echo "The value contained in a is $a <br />";
        echo 'The value contained in a after the increment ' . $a++ . ' <br />';
        echo "The value contained a updated is $a";
    ?>

    <h3>Pre-increment</h3>

    <?php 

        $a = 7;

        echo "The contained value in \"a\" is " . $a . " <br />";
        echo 'The contained value in \'a\' the Pre-increment is ' . ++$a . ' <br />';
        echo "The value contained \"a\" updated is $a";
             
    ?>

    <h3>Pos-decrement</h3>

    <?php 

        $a = 7;

        echo "The value contained in \"a\" is " . $a . " <br />";
        echo 'The contained value in \'a\' after Pos-decrement is ' . $a-- . ' <br />';
        echo "The contained value updated $a";
             
    ?>

    <h3>Pre-decrement</h3>

    <?php 

        $a = 7;

        echo "The value contained in \"a\" is " . $a . " <br />";
        echo 'The contained value in \'a\' after Pre-decrement is ' . --$a . ' <br />';
        echo "The contained value updated $a";
            
    ?> 
</body>
</html>