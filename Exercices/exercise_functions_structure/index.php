<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
  
    $aliquota = 0.0;
    $salary = 3000.00;

    function calculateAliquotaPerPerson() {
      global $aliquota, $salary;

      if ($salary <= 1903.98) {
        $aliquota = 0.0;
      } else if ($salary > 1903.98 && $salary <= 2826.65) {
        $aliquota = 7.5 / 100 * $salary;
      } else if ($salary > 2826.65 && $salary <= 3751.05) {
        $aliquota = 15.0 / 100 * $salary;
      } else if ($salary > 3751.05 && $salary <= 4664.68) {
        $aliquota = 22.5 / 100 * $salary;
      } else {
        $aliquota = 27.5 / 100 * $salary;
      }
    }

    calculateAliquotaPerPerson();
    echo "A alíquota de imposto de renda para o salário de R$ $salary é R$ $aliquota.";
  
  ?>

</body>
</html>
