<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/page_modifier_reservation.css">
    <title>Aeroport de Paris</title>
</head>
<body>
  
<div class="header">
<a href="../View/page_service.php"><img src="../Public/img/logo.png" id="logo"></img></a>
</div>

<?php include('../Controller/liste_passager.php');?>

 <table>
<tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Téléphone</th>
      <th>Vol</th>
      <th>Place</th>
      <th>Supprimer</th>
      <!-- Ajoutez d'autres colonnes selon votre table -->
    </tr>
    <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $row['Nom']; ?></td>
        <td><?php echo $row['Prenom']; ?></td>
        <td><?php echo $row['Telephone']; ?></td>
        <td><?php echo $row['Vol']; ?></td>
        <td><?php echo $row['Place']; ?></td>
        <!-- Ajoutez d'autres colonnes selon votre table -->
     
    <td>
      <form method="POST" action ="../controller/liste_modification.php">
        <input  hidden type="text" value ="<?php echo $row['id']?>" name="id" ></input>
        <input  type='submit' class="ButtonDelete" value='supprimer'/>
      </form>
    </td>

    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>