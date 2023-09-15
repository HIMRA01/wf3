<?php
include "inc/database.php";
// Récupérez les données soumises par le formulaire
if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $type_annonce = $_POST['type_annonce'];
    $prix = $_POST['prix'];

    $connexion = dbConnexion();

    // se connecter a la base de donnée 
    $db = dbConnexion();
    // prepare la requete 
    $request = $db->prepare("INSERT INTO advert (title, description, postale_code, city, type, price) VALUES(?, ?, ?, ?, ?, ?)");
    // excuter la requete
    try {

        $request->execute(array($title, $description, $code_postal, $ville, $type_annonce, $prix));

    } catch (PDOException $e) {

        echo $e->getMessage();
    }

}
function listAccueil()
{
    // Connexion base de données
    $db = dbConnexion();

    //Préparation requete
    $request = $db->prepare('SELECT * FROM advert ORDER BY id desc LIMIT 15');

    //Executer la requete
    try {
        $request->execute();
        $annonces = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        $error->getMessage();
    }
    return $annonces;
}


// // Préparez et exécutez la requête SQL pour insérer les données dans la base de données
// $sql = "INSERT INTO annonces_immobilieres (titre, description, code_postal, ville, type_annonce, prix) VALUES (?, ?, ?, ?, ?, ?)";
// $requete = $connexion->prepare($sql);
// $requete->bind_param("sssssi", $titre, $description, $code_postal, $ville, $type_annonce, $prix);

// if ($requete->execute()) {
//     echo "L'annonce a été ajoutée avec succès.";
// } else {
//     echo "Erreur lors de l'ajout de l'annonce : " . $connexion->error;
// }

// // Fermez la connexion à la base de données
// $requete->close();
// $connexion->close();
?>