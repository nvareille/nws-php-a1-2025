<?php

var_dump($_POST);

include "bdd.php";

$stmt = $pdo->prepare("INSERT INTO student(Id, Nom, Prenom, Filiere) VALUES (NULL,?,?,?);");
$stmt->execute([$_POST["nom"], $_POST["prenom"], $_POST["filiere"]]);

?>