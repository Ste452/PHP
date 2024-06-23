<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 

        $name = "Steve";    
        $idade = 24;
        $peso = 59.4;
        $fumante_sn = true; 
    ?>

    
    <br/>

    <h1>Ficha Cadastral</h1>

    <br/>

    <hr/>
    <p>Nome: <?php print $name ?></p>
    <p>Idade: <?php print $idade ?></p>
    <p>Peso: <?php print $peso ?></p>
    <p>Fumante: <?php echo ($fumante_sn == false) ? "Todas as nossas escolhas tem uma ação e reação, causa e efeito, seja benéfico ou maléfico." : "Não"; ?>
    
    </p>
</body>
</html>