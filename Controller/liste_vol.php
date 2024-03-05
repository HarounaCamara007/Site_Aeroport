<?php
include("../bdd/bdd.php");

$sql = "SELECT * FROM vol";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
