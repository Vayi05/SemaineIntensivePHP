<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 14:12
 */
if(!isset($_GET['id'])) {
    header('Location:admin.php?noprovidededit');
}
require_once "connexion.php";
$requete = 'SELECT
  `id`,
  `marque`,
  `modele`,
  `annee`,
  `img`
  FROM
  `voitures`
  WHERE
  id = :id
  ;';
$stmt=$conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <form action="doedit.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <label for="marque">Marque</label> <input type="text" name="marque" value="<?=$row['marque']?>"><br>
        <label for="modele">Modèle</label> <input type="text" name="modele" value="<?=$row['modele']?>"><br>
        <label for="annee">Année</label> <input type="text" name="annee" value="<?=$row['annee']?>">
        <label for="img">Image</label> <input type="file" name="img" value="img/<?=$row['annee']?>"><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
