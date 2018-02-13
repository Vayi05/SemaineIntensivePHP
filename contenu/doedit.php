<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 14:23
 */
if(!isset($_POST['marque']) || !isset($_POST['modele']) || !isset($_POST['annee']) ){
    header('Location:admin.php?nopostdata');
    exit;
}
require_once "connexion.php";
if(isset($_FILES['img']['name'])){
    $requete = "UPDATE
`voitures`
SET
`marque` = :marque,
`modele` = :modele,
`annee` = :annee,
`img` = :img
WHERE
id = :id
;";
} else {
    $requete = "UPDATE
`voitures`
SET
`marque` = :marque,
`modele` = :modele,
`annee` = :annee
WHERE
id = :id
;";
}

if(isset($_FILES['img']['name'])) {
    $uploadfile='img/'.$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
}

$stmt=$conn->prepare($requete);
$stmt->bindValue(':marque', htmlentities($_POST['marque']));
$stmt->bindValue(':modele', htmlentities($_POST['modele']));
$stmt->bindValue(':annee', htmlentities($_POST['annee']));
$stmt->bindValue(':id', htmlentities($_POST['id']));
if(isset($_FILES['img']['name'])){
    $stmt->bindValue(':img',htmlentities( $_FILES['img']['name']));
}
$stmt->execute();
header('Location:admin.php');