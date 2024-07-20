<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 

      $text = "First modifications on string functions in PHP";
      // String to lower
      echo $text . '<br />';
      echo "<hr />";
      echo strtolower($text);

      echo "<hr />";

      // String to upper
      echo $text . '<br />';
      echo "<hr />";
      echo strtoupper($text);

      echo "<hr />";

      // String to upper on first letter
      echo $text . '<br />';
      echo "<hr />";
      echo ucfirst($text);

      echo "<hr />";
      // String length
      echo $text . '<br />';
      echo strlen($text);

      echo "<hr />";
      // String replace
      echo $text . '<br />';
      echo str_replace('PHP', 'JavaScript', $text);

      echo "<hr />";
      // String substring
      echo $text . '<br />';
      echo substr($text, 1, 4);
  ?>    

  
</body>
</html>