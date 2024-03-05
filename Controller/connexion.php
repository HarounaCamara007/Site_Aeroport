<?php
            session_start();
            require_once("../bdd/bdd.php"); 

            if(isset($_POST["identifiant"])){
                $valide= !empty($_POST["identifiant"]) &&
                         !empty($_POST["password"]); #non Vide
                if(!$valide){
                    echo "<p style='color:red'>Tous les champs sont obligatoire!</p>";
                }else{
                    $sql = "select identifiant, password from connexion where identifiant='".$_POST['identifiant']."'";
                    $stmt = $pdo->query($sql, PDO::FETCH_ASSOC);
                    $stmt->execute();
                    
                    $result= $stmt->fetch();
                    $goodPassword= password_verify($_POST['password'], $result["password"]);

                    if($_POST['password'] === $result["password"]){
                        $_SESSION["User"]= $result;
                        header('Location: /Projet_DevOps/View/page_service.php');
                    }else{
                        echo "<p style='color:red'>Identifiants incorrect !</p>";
                    }
                }
            }else if(isset($_SESSION["User"])){
                header('Location: /Projet_DevOps/View/page_service.php'); 
            }
    ?>