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
$data = 12;
$text = $data % 2 == 0 ? "EVEN" : "ODD";
print "<td style='background-color:";
print $data % 2 == 0 ? "lightblue" : "lightgreen";
print "'>$text</td>";
?>
</tr>
</table>
</body>
</html>