<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 10:39
 */
if(!isset($_POST['marque']) || !isset($_POST['modele']) || !isset($_POST['annee']) || !isset($_FILES['img']['name']) ) {
    header('Location:admin.php?nopostdata');
    exit;
}
require_once "connexion.php";
$requete = "INSERT INTO
`voitures`
(`marque`, `modele`, `annee`, `img`)
VALUES
(:marque, :modele, :annee, :img)
;";

$uploadfile='img/'.$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

$stmt=$conn->prepare($requete);
$stmt->bindValue(':marque', htmlentities($_POST['marque']));
$stmt->bindValue(':modele', htmlentities($_POST['modele']));
$stmt->bindValue(':annee', htmlentities($_POST['annee']));
$stmt->bindValue(':img', htmlentities($_FILES['img']['name']));
$stmt->execute();
header('Location:admin.php');
