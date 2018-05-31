<?php
    $colonnes = $_GET["colonnes"] ?? 10;
    $lignes = $_GET["lignes"] ?? 10;

    $blanc = "<div class=\"case red\"></div>";
    
    $noir = "<div class=\"case black\"></div>";

    function ligne($n, $white, $black, $blancEnPremier = true) {
        $ligne = "";
        for($i = 1; $i <= $n; $i++) {
            //$ligne .= $blancEnPremier ? "⬜" : "⬛";
            $ligne .= $blancEnPremier ? $white : $black;
            $blancEnPremier = ! $blancEnPremier;
        }
        return $ligne . "<br>";
    }

    function damier($col, $white, $black, $lig) {
        $damier = "";
        for($i = 1; $i <= $lig; $i++) {
            $damier .= ligne($col, $white, $black, ($i % 2) === 0);
        }
        return $damier;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Damier $colonnes x $lignes" ?></title>
    <style>
        .case {
            display: inline-block;
            width: 10px;
            height:10px;
        }

        .red {
            background-color: red;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="damier"><?= damier($colonnes, $blanc, $noir, $lignes) ?></div>
    <a href="">afficher un échiquier 8x8</a><br><!-- blanc et noir -->
    <a href="">afficher un damier 10x10</a><br> <-- rouge et noir -->
</body>
</html>