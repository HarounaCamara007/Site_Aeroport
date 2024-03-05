<?php
include("../bdd/bdd.php");

if(isset($_POST["id"])){
    $sql = "DELETE FROM passager WHERE id =?";
    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute(array($_POST["id"])); 
                    
    header('Location:http://localhost/Projet_DevOps/View/page_modifier_reservation.php');
    exit();
}
?>

