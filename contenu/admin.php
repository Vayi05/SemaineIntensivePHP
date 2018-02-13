<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 09:33
 */
require_once "connexion.php";
$requete ="SELECT
  `id`,
  `marque`,
  `modele`,
  `annee`,
  `img`
  FROM
  `voitures`
  ;";
$stmt=$conn->prepare($requete);
$stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Panneau administrateur</h1>
    <a href="add.php">Ajouter</a>
    <table>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Action</th>
        </tr>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?=$row['marque']?></td>
                <td><?=$row['modele']?></td>
                <td><?=$row['annee']?></td>
                <td>
                    <a href="details.php?id=<?=$row['id']?>">Détails</a>
                    <a href="delete.php?id=<?=$row['id']?>">Supprimer</a>
                    <a href="edit.php?id=<?=$row['id']?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile;?>
    </table>
    <a href="index.php">Index</a>
</body>
</html>
