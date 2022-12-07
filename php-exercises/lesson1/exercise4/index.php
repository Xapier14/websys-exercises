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
      width: 20rem;
      text-align: center;
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <?php
      $sys = 121;
      $dia = 83;
      $text = "n/a";
      $color = "gray";
      if ($sys > 140 || $dia > 90) {
        $text = "HIGH";
        $color = "#F00";
      } else if ((130 < $sys && $sys < 139) || (85 < $dia && $dia < 89)) {
        $text = "WARNING";
        $color = "#FF0";
      } else if ((120 < $sys && $sys < 129) || (80 < $dia && $dia < 84)) {
        $text = "NORMAL";
        $color = "#0F0";
      }
      print "<td style='background-color:$color";
      print "'>$text</td>";
      ?>
    </tr>
  </table>
</body>

</html>