<?php

$plats = file_get_contents("plats.json");
$plats = json_decode($plats, true);

$plats["Tarte aux Fraises"] = ["Pâte", "Fraises", "Lait"];

$plats = json_encode($plats);
file_put_contents("plats.json", $plats);
?>