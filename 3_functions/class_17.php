<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 
  

      function calculate_imc(float $weight, float $height) {
          var_dump($weight, $height);
          return $weight / ($height^2);
      }
      
      var_dump(calculate_imc('75.1', 2));
  
  
  ?>

</body>
</html>