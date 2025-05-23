<?php
include "bdd.php";

$stmt = $pdo->prepare("INSERT INTO student(Id, Nom, Prenom, Filiere) VALUES (NULL,?,?,?);");
$stmt->execute(["Ghesquiere", "Fabien", "MD"]);
?>