<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 13:32
 */
if(!isset($_GET['id'])) {
    header('Location:admin.php?noprovideddelete');
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
    <form action="dodelete.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <label for="">Supprimer <?=$row['marque'].' '.$row['modele']?> ?</label><br>
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
