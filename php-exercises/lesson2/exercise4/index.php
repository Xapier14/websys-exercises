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
  <table>
    <?php
    function stars($i)
    {
      for ($r = 0; $r < $i; $r++) {
        for ($c = 0; $c < $i; $c++)
          print "* ";
        print "<br>";
      }
    }
    stars(5);
    ?>
  </table>
</body>

</html>