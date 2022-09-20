<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
  <style>
    body {
      padding: 50px 25%;
      background: #000;
      color: #fff;
      font-size: 1.5rem;
      font-family: Arial, Helvetica, sans-serif;
    }

    blockquote {
      font-style: italic;
    }
  </style>
</head>

<body>
  <?php
  $string = "Credo che le tecnologie siano moralmente neutrali fino a quando non le applichiamo. E' solo quando si usano per il bene o per il male, che diventano bene o male.";
  $author = "- William Gibson";
  $censored = "***";
  $filter = strtolower($_GET["censor"]);
  $string = str_replace($filter, $censored, $string);
  ?>  

  <blockquote>
    <?php echo $string ?>
  </blockquote>
  <?php echo $author ?>
  <br><br>
</body>

</html>