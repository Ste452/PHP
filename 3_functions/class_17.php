<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 
  
      // Converting variables

      function array_calculate_imc(float $weight, float $height): array {

        return str_split((String) $weight, $height);
      }
  

      // The good way for converting types in paramer is if they are similar 
      function calculate_imc(float $weight, float $height): int {
        var_dump((int) $weight, (int) $height);
        return (int) $weight / ((Integer) $height * $height);
      }

      var_dump(array_calculate_imc(75, 1.85));
      echo "<br />" . "<br />";
      var_dump(calculate_imc(75, 1.85));
  
  
  ?>

</body>
</html>