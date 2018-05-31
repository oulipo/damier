<?php
    // $colonnes = $_GET["colonnes"] ?? 10;
    // $lignes = $_GET["lignes"] ?? 10;
    $type = $_GET["type"] ?? "echiquier";

    $blanc = "<div class=\"case white\"></div>";
    $rouge = "<div class=\"case red\"></div>";
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

    function plateau($col, $lig, $white, $black) {
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
    body {
        background-color: grey;
    }
        .case {
            display: inline-block;
            width: 10px;
            height:10px;
        }

        .red {
            background-color: red;
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="damier">
        <?php
            if( $type === 'echiquier' ) {
                echo plateau(8, 8, $blanc, $noir);
            } elseif( $type === 'damier') {
                echo plateau(10, 10, $rouge, $noir);
            } else {
                echo "Mauvais choix...";
            }
        ?>
    </div>
    <a href="index.php?type=echiquier">afficher un échiquier 8x8</a><br><!-- blanc et noir -->
    <a href="index.php?type=damier">afficher un damier 10x10</a><br> <!-- rouge et noir -->
</body>
</html>