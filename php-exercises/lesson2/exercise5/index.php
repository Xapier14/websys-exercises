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
    function calculate($c1, $c2)
    {
      for ($i = 0; $i < 5; $i++) {
        print "<tr>";
        $style = $i % 2 == 0 ? $c1 : $c2;
        $mul = $i * 2;
        $pow = $i * $i;
        $cub = $i * $i * $i;
        print "<td style='background-color:$style'>$mul</td>";
        print "<td style='background-color:$style'>$pow</td>";
        print "<td style='background-color:$style'>$cub</td>";
        print "</tr>";
      }
    }
    calculate("cyan", "pink");
    print "<br>";
    calculate("#CCCCCC", "#999999");
    ?>
  </table>
</body>

</html>