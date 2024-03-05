<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/css/index.css">
    <title>Document</title>
</head>
<body>
   <form action="./Controller/connexion.php" method="post" id="formulaire_connexion">
    
    <h3>Connexion Administrateur</h3>

        <label for="identifiant" id="identifiant"> ID </label><br>
        <input type="text" id="identifiant_input" name="identifiant"></input><br>
    
        <label for="password"> Mot de passe </label><br>
        <input type="text" id="password_input" name="password"></input><br>

        <input type="submit" value="Connexion" id="bouton_connexion"></input>
    </form>
</body>
</html>