<!DOCTYPE html>

<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<h1> table de multiplication : </h1>
<?php
 echo "<table style='border : 1px solid black'>";
 echo "<thead>";
 echo "<th style='border : 1px solid black'></th>";
 for ($i = 0; $i <= 12; $i++) {
     echo "<th style='border : 1px solid black'>$i</th>";
 }
 echo "</thead>";
 for ($y = 0; $y <= 12; $y++) {
     echo "<tr>";
     echo "<th style='border : 1px solid black'>$y</th>";
     for ($td = 0; $td <= 12; $td++) {
         $resultat = $td * $y;
         echo "<td style='border : 1px solid black'>$resultat</td>";
     }
     echo "</tr>";
 }
 echo "</table>";
$s = ucwords("bonjour je m'apelle maxime");
echo $s

?>

</form>
</body>
</html>