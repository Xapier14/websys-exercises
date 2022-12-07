<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <?php
  $r = 10;
  $c = 5;
  for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
      print("* ");
    }
    print("<br>");
  }
  ?>
</body>

</html>