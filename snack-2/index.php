<?php
/*
Snack-2 
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];


if (strlen($name) > 2 && strpos($email, ".") && strpos($email, "@") && filter_var($age, FILTER_VALIDATE_INT)) {
    echo $validation = 'Accesso Riuscito';
} else {
    echo $validation = 'Accesso Negato';
}
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
    <form action="index.php" method="get">
        <div>
            <label for="name">Name</label>
            <input type="name" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="age" name="age" id="age">
        </div>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <h1><? $validation ?></h1>
</body>

</html>