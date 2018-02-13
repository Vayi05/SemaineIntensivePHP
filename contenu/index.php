<?php
require_once "connexion.php";
$requete = "SELECT
    `id`,
    `marque`,
    `modele`,
    `annee`,
    `img`
    FROM
    `voitures`
    ;";
$stmt = $conn->prepare($requete);
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
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php if (isset($_GET['error'])) { ?>
        <div class="error"><?=$_GET['error']?></div>
    <?php } ?>

    <h1 class="title">Nos voitures</h1>

    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>

        <img src="img/<?=$row['img']?>" alt="<?=$row['marque'].' '.$row['modele']?>">
        <h2 class="carName"><?=$row['marque'].' '.$row['modele']?></h2>
        <h3><?=$row['annee']?></h3>

    <?php endwhile;?>

    <a href="admin.php">Panneau administrateur</a>
</body>
</html>
