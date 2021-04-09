<!DOCTYPE html>

<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<h1> Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers. </h1>
  <?php 
    for ($nombre_de_lignes = 1; $nombre_de_lignes <= 500; $nombre_de_lignes++) {
        echo 'Je dois faire des sauvegardes régulières de mes fichiers.' . $nombre_de_lignes . '<br />';
    }
    ?> 
</body>
</html>
