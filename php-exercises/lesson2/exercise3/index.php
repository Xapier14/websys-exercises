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

    td {
      width: 10rem;
    }
  </style>
</head>

<body>
  <table>
    <?php
    $rows = 5;
    for ($i = 0; $i < $rows; $i++) {
      print "<tr>";
      $style = $i % 2 == 0 ? "lightyellow" : "lightgreen";
      print "<td style='background-color:$style'>$i</td>";
      print "</tr>";
    }
    ?>
  </table>
</body>

</html>