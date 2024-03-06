<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/css/index.css">
    <title>Aeroport de Paris</title>
</head>
<body>
   <form action="./Controller/connexion.php" method="post" id="formulaire_connexion">
    
    <h3>Connexion Administrateur</h3>

        <label for="identifiant" id="identifiant"> Votre identifiant </label><br>
        <input type="text" id="identifiant_input" name="identifiant"></input><br>
    
        <label for="password"> Votre Mot de passe </label><br>
        <input type="text" id="password_input" name="password"></input><br>

        <input type="submit" value="Connexion" id="bouton_connexion"></input>
    </form>

    <form action="./Controller/inscription.php" method="post" id="formulaire_inscription">
    
    <div class="form_inscription">
    <h3>Inscription</h3>

        <label for="identifiant" id="identifiant"> Votre identifiant </label><br>
        <input type="text" id="identifiant_input" name="identifiant"></input><br>
    
        <label for="password"> Votre Mot de passe </label><br>
        <input type="text" id="password_input" name="password"></input><br>

        <input type="submit" value="inscription" id="bouton_inscription"></input>
    </form>
    </div>
</body>
</html>