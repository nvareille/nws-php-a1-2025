<?php

$monJson = file_get_contents("plats.json");
$monJson = json_decode($monJson);

var_dump($monJson);

?>