<?php
/**
 * Created by PhpStorm.
 * User: amaury
 * Date: 13/02/18
 * Time: 13:43
 */
if (!isset($_POST['id'])) {
    header('Location: admin.php?error=nopostdatadelete');
    exit;
}
require_once "connexion.php";
$requete = "DELETE FROM 
`voitures` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: admin.php');