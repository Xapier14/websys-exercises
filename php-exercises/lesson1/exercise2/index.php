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

    <?php
    $data = 11;
    print "body {";
    print "background-color:";
    print $data % 2 == 0 ? "blue" : "green";
    print ";}";
    ?>
  </style>
</head>

<body>
  <table>
</body>

</html>