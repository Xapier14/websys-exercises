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
  <pre>
<?php
$prime = [1, 2, 3, 5, 7];
for ($i = 0; $i < 5; $i++) {
  $n = $prime[$i];
  $mul = $n * 2;
  $pow = $n * $n;
  $cub = $n * $n * $n;
  print "$mul\t$pow\t$cub<br>";
}
?>
</pre>
</body>

</html>