<?php
    $colonnes = $_GET["colonnes"] ?? 10;
    $lignes = $_GET["lignes"] ?? 10;

    function ligne($n, $blancEnPremier = true) {
        $ligne = "";
        for($i = 1; $i <= $n; $i++) {
            $ligne .= $blancEnPremier ? "⬜" : "⬛";
            $blancEnPremier = ! $blancEnPremier;
        }
        return $ligne . "<br>";
    }

    function damier($col, $lig) {
        $damier = "";
        for($i = 1; $i <= $lig; $i++) {
            $damier .= ligne($col, ($i % 2) === 0);
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
        .damier {
            font-size: 8px;
            line-height: 8px;
            letter-spacing: -3px;
        }
    </style>
</head>
<body>
    <div class="damier"><?= damier($colonnes, $lignes) ?></div>
</body>
</html>