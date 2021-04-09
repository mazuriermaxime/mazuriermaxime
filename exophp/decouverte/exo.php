<!DOCTYPE html>

<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <html>
<body>
  <title> exercie 1 </title>
<h1>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150,
 par ordre croissant : 1 3 5 7... </h1>
  <?php 
    $counter = 0;

    while ($counter < 150) {
        $counter += 1;
        if ($counter % 2 == 0){
            echo "\n";
            continue;
        }
        echo "$counter.\n";
    }
    ?> 
</body>
</html>