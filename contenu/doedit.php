<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 14:23
 */
if(($_POST['marque'])==="" || ($_POST['modele'])==="" || ($_POST['annee'])==="" || ($_FILES['img']['name'])==="" ) {
    header('Location:admin.php?nopostdata');
    exit;
}
require_once "connexion.php";
$requete = "UPDATE
`voitures`
SET
`marque`,
`modele`,
`annee`,
`img`
WHERE
id = :id
;";

$uploadfile='img/'.$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

$stmt=$conn->prepare($requete);
$stmt->bindValue(':marque', $_POST['marque']);
$stmt->bindValue(':modele', $_POST['modele']);
$stmt->bindValue(':annee',$_POST['annee']);
$stmt->bindValue(':img', $_FILES['img']['name']);
$stmt->execute();
header('Location:admin.php');