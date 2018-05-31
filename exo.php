<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
<?php

// faire un script/programme qui calcule la somme des nombres de 1 à 100
$somme = 0;
for($n = 1; $n <= 100; $n++) {
    echo $n . "<br>";
    $somme = $somme + $n;
}
?>
<h1><?php echo "La somme des nombres de 1 à 100 est égale à " . $somme; ?></h1>
</p>
</body>
</html>
