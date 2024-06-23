<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    
        p {
            font-size: 20px  !important;
        }
    
    </style>
</head>
<body>
    
    <?php

        $user_has_store_card = true;
        $purchase_value = 500;  
        $freight_value = 50;
        $received_freight_discount = false;

        // This ternary operator is equal to the condictional structure below.
        $freight_value_assistant = $user_has_store_card && $purchase_value >= 400 ? 0 
        : ($user_has_store_card && $purchase_value >= 300 ? 10 : 
        ($user_has_store_card && $purchase_value >= 100 ? 25 : $freight_value));    

        $received_freight_discount = $freight_value != $freight_value_assistant 
        ? true : false;

        // This conditional structure is equal to the ternary operator above.
        /*if ($user_has_store_card && $purchase_value >= 400) {
            
            $freight_value = 0;
            
        } else if($user_has_store_card && $purchase_value >= 300) {
            
            $freight_value = 10;
        
        } else if($user_has_store_card && $purchase_value >= 100) {
        
            $freight_value = 25;
            
        } else {
            $received_freight_discount = false;
        }*/
    ?>

    <h1>Order details</h1>

    <p>Have a store card? <?= ($user_has_store_card == true) ?  "True" :  "False"; ?></p>

    <p>Purchase value: <?= $purchase_value ?></p> 

    <p>Received freight discount? 
        
    <?= ($received_freight_discount == true) ? "True" : "False"; ?></p>

    <p>Freight value: <?= $freight_value ?></p> 

</body>
</html>
