<?php
include "bdd.php";

$stmt = $pdo->query("SELECT * FROM `student`");
$users = $stmt->fetchAll();

foreach ($users as $user)
{
    echo "<div>";
    echo    "<h1>" . $user['Nom'] . " " . $user['Prenom'] . "</h1>";
    echo "</div>";
}
?>