<?php

/*
#Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. 
*/

$matches = [

    "Lakers - Boston Celtics | 22 - 18",

    "Warriors - Chicago Bulls | 13 - 20",

    "Philadelphia - Detroit | 28 - 10",

    "Miami Heat - Huston Rockets | 32 - 19",

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($matches as $match) {
        echo $match . '<br>';
    }
    ?>
</body>

</html>