<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coucou tout le monde !</h1>

    <?php

    $age = 30;
    $nomAnimal = "Mina";

    echo "<p>Je m'appelle Nicolas et j'ai $age et mon chat s'appelle $nomAnimal</p>";

    if ($age >= 45)
    {
        echo "<p>ok l'ancien</p>";
    }
    else if ($age >= 30)
    {
        echo "<p>ok boomer</p>";
    }
    else
    {
        echo "<p>ok</p>";
    }

    ?>

</body>
</html>