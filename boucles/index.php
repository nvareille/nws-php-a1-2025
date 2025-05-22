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
    $maVariable = 1;
    $pokemons = ["Dracaufeu", "Lucario", "Lugia"];

    $pokemons[$maVariable] = "bidule";

    $pokemons[] = "Darkrai";

    var_dump($pokemons);

    $i = 0;

    while ($i <= 10)
    {
        echo "<p>$i</p>";
        $i = $i + 1; // Strictement equivalent à "$i++;"
    }

    // En JS: for (pokemon of pokemons)
    foreach ($pokemons as $pokemon)
    {
        echo "<p>$pokemon</p>";
    }

    ?>

</body>
</html>