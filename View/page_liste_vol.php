<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/page_liste_vol.css">
    <title>Document</title>
</head>
<body>

<div class="header">
<a href="../View/page_service.php"><img src="../Public/img/logo.png" id="logo"></img></a>
</div>

<?php include('../Controller/liste_vol.php');?>

<table>
<tr>
      <th>N° de vol</th>
      <th>Terminal</th>
      <th>Compagnie</th>
      <!-- Ajoutez d'autres colonnes selon votre table -->
</tr>
    <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $row['vol_numero']; ?></td>
        <td><?php echo $row['terminal']; ?></td>
        <td><?php echo $row['compagnie']; ?></td>
        <!-- Ajoutez d'autres colonnes selon votre table -->
      </tr>
    <?php endforeach; ?>
</table>
</body>
</html>