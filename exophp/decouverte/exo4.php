<?php

    function calc(int $a, int $b, string $o) : int {
        switch($o) {
            case "+": return $a+= $b;
            case "-": return $a-= $b;
            case "": return $a= $b;
            case "/": return $a/= $b;
        } return NAN;
    }

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calc</title>
        <style>button {border:2px outset #bfbfbf;outline:0} button:hover {cursor:pointer;border:2px inset #bfbfbf}</style>
    </head>
    <body>
        <h1> calculatrice : </h1>
        <form method="post">
            <input type="number" name="a" id="a">
            <select name="operator" id="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value=""></option>
                <option value="/">/</option>
            </select>
            <input type="number" name="b" id="b">
            <button>calculer</button>
        </form>
<?php if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['operator'])) { ?>
        <pre>Le résultat est : <?=calc($_POST['a'], $_POST['b'], $_POST['operator'])?></pre>
<?php } ?>
    </body>
</html>