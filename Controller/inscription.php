<?php
include("../bdd/bdd.php");

$sql= "INSERT INTO connexion(identifiant, password) VALUES (?,?) ";
$stmt =  $pdo->prepare($sql);
$stmt->execute([$_POST['identifiant'], $_POST['password']]);

header('Location:http://localhost/site_aeroport/index.php');
exit();

?>