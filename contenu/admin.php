<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 09:33
 */
require_once "connexion.php";
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

<!-- GESTION DES VOITURES -->
<h2>Voitures</h2>
<a href="add.php">Ajouter</a>
<table style="width:100%;">
    <tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Couleur</th>
        <th>Année</th>
        <th>Gamme</th>
        <th>Pays d'origine</th>
        <th>Immatriculation</th>
        <th>Kilométrage</th>
        <th>Nombre possesseurs</th>
        <th>Vendeur</th>
        <th>Etat</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    <?php
    $requete ="SELECT
          `id`,
          `marque`,
          `modele`,
          `couleur`,
          `annee`,
          `gamme`,
          `paysdorigine`,
          `plaque`,
          `kilometrage`,
          `nbrPossesseur`,
          `vendeur`,
          `etat`,
          `quantite`,
          `prix`
          FROM
          voitures
          ;";
    $stmt=$conn->prepare($requete);
    $stmt->execute();
    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['marque']?></td>
            <td><?=$row['modele']?></td>
            <td><?=$row['couleur']?></td>
            <td><?=$row['annee']?></td>
            <td><?=$row['gamme']?></td>
            <td><?=$row['paysdorigine']?></td>
            <td><?=$row['plaque']?></td>
            <td><?=$row['kilometrage']?></td>
            <td><?=$row['nbrPossesseur']?></td>
            <td><?=$row['vendeur']?></td>
            <td><?=$row['etat']?></td>
            <td><?=$row['quantite']?></td>
            <td><?=$row['prix']?></td>
            <td>
                <a href="delete.php?id=<?=$row['id']?>">Supprimer</a>
                <a href="edit.php?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>
<hr />
<!-- GESTION DES PIECES -->
<h2>Pieces</h2>
<a href="#">Ajouter</a>
<table>
    <tr>
        <th>Numéro de série</th>
        <th>Stock</th>
        <th>prix</th>
        <th>Action</th>
    </tr>
    <?php
    $requete ="SELECT
          id,
          numserie,
          stock,
          prix
          FROM
          pieces
          ;";
    $stmt=$conn->prepare($requete);
    $stmt->execute();
    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['type']?></td>
            <td><?=$row['numserie']?></td>
            <td><?=$row['stock']?></td>
            <td>
                <a href="#?id=<?=$row['id']?>">Supprimer</a>
                <a href="#?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>
<a href="index.php">Index</a>
</body>
</html>