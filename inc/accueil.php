<?php
require_once("../traitement_formulaire.php");
$listAccueil = listAccueil();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <header>
        <h1>Bienvenue sur le site d'annonces immobilières</h1>
        <nav>
            <ul>
                <li><a href="../formulaire_annonce.php">Ajouter une annonce</a></li>
                <li><a href="../consulter_annonces.php">Consulter toutes les annonces</a></li>
            </ul>
        </nav>
    </header>

    <section class="annonces">
        <h2>Annonces récentes</h2>
        <?php foreach ($listAccueil as $list) { ?>
            <ul>
                <li><?= $list["title"] ?></li>
                <li><?= $list["description"] ?></li>
                <li><?= $list["postale_code"] ?></li>
                <li><?= $list["city"] ?></li>
                <li><?= $list["type"] ?></li>
                <li><?= $list["price"] ?></li>
            </ul>
        <?php } ?>
    </section>
</body>

</html>