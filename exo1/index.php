<?php

$plats =
[
    "Kebab" => ["viande", "pain", "salade", "tomates", "oignons"],
    "Glace à la Fraise" => ["Lait", "Fraises", "Sucre"]
];

var_dump($plats);

foreach ($plats as $k => $plat)
{
    echo "<div>";
    echo    "<h1>$k</h1>";
    echo    "<ul>";

    foreach ($plat as $ingredient)
    {
        echo    "<li>$ingredient</li>";
    }

    echo    "</ul>";
    echo "</div>";
}

?>