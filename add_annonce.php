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
                <li><a href="ajouter_annonce.php">Ajouter une annonce</a></li>
                <li><a href="consulter_annonces.php">Consulter toutes les annonces</a></li>
            </ul>
        </nav>
    </header>

    <section class="annonces">
        <h2>Annonces récentes</h2>
        <ul>
            <?php
            // Connexion à la base de données (à personnaliser avec vos informations de connexion)
            $serveur = "localhost";
            $utilisateur = "votre_utilisateur";
            $mot_de_passe = "votre_mot_de_passe";
            $base_de_donnees = "votre_base_de_donnees";

            $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

            if ($connexion->connect_error) {
                die("La connexion à la base de données a échoué : " . $connexion->connect_error);
            }

            // Requête SQL pour récupérer les 15 dernières annonces triées par date (remplacez les noms de table et de colonne par les vôtres)
            $requete = "SELECT * FROM annonces ORDER BY date_creation DESC LIMIT 15";
            $resultat = $connexion->query($requete);

            if ($resultat->num_rows > 0) {
                while ($row = $resultat->fetch_assoc()) {
                    // Affichage de chaque annonce
                    echo '<li>' . strtoupper($row['titre']) . '<br>' . $row['description'] . '<br>Prix : ' . $row['prix'] . '</li>';
                }
            } else {
                echo "Aucune annonce n'a été trouvée.";
            }

            // Fermeture de la connexion à la base de données
            $connexion->close();
            ?>
        </ul>
    </section>
</body>

</html>