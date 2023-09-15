<!DOCTYPE html>

<html>

<head>
    <title>Ajouter une annonce immobilière</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bloc">
    <h1>Ajouter une annonce immobilière</h1>
    <form action="traitement_formulaire.php" method="POST">
        <label for="title">Titre de l'annonce :</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description de l'annonce :</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="type_annonce">Type d'annonce :</label>
        <select id="type_annonce" name="type_annonce" required>
            <option value="location">Location</option>
            <option value="vente">Vente</option>
        </select><br><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" required><br><br>

        <input type="submit" value="Ajouter l'annonce">
    </form>
</body>

</html>