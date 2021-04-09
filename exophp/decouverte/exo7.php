<!DOCTYPE html>

<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<?php
 $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
 "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
 "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
);

    // Quelle semaine a lieu la validation du groupe 19002?
$ validation_1902 = array_search ( "Validation" , $ a [ "19002" ]) + 1 ;

    // Trouver la position de la dernière occurrence de Stage pour le groupe 19001.
$ der_semaine_stage_1901 = array_search ( "Stage" , array_reverse ( $ a [ "19001" ], true )) + 1 ;

    // Extraire, dans un nouveau tableau, les codes des groupes.
$ tableau_code_groupes = implode ( "," , array_keys ( $ a ));

    // Combien de semaines dure le stage du groupe 19003?
$ duree_stage_1903 = array_count_values ( $ a [ "19003" ]) [ "Stage" ];

?>

</body>
</html>
