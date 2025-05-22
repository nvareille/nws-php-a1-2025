<?php
$plats =
[
    "Kebab" => ["viande", "pain", "salade", "tomates", "oignons"],
    "Glace à la Fraise" => ["Lait", "Fraises", "Sucre"]
];

$monJson = json_encode($plats);

var_dump($monJson);

file_put_contents("plats.json", $monJson);

?>