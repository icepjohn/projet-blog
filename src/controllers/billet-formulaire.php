<?php
//Test de la soumission du formulaire
$isSubmitted = filter_has_var(INPUT_POST, "submit");

//Initialisation d'un tableau des erreurs
$errors = [];

if ($isSubmitted) {
    $connexion = getPDO();

    //Récupération des données
    $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
    $chapo = filter_input(INPUT_POST, 'chapo', FILTER_SANITIZE_STRING);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_EMAIL);

    //Validation des données
    if (empty($titre)) {
        $errors[] = "Vous devez saisir un titre";
    }
    if (empty($chapo)) {
        $errors[] = "Vous devez saisir un chapô";
    }

    if (empty($text)) {
        $errors[] = "Vous devez saisir du text";
    }


    //Exécution des requêtes avec capture des exceptions
    try {


            //Insertion de l'utilisateur
            $sql = "INSERT INTO personnes (titre, chapo, text)
                VALUES (?,?,@id)";
            $stm = $connexion->prepare($sql);
            $stm->execute([$titre, $chapo, $text]);

            //Redirection vers la page d'accueil
            $_SESSION["flash"] = "Vous êtes inscrit vous pouvez maintenant vous identifier";
            header("location:index.php?controller=accueil");

        }//Fin insertion des données
    } catch (PDOException $e) {
        $_SESSION["flash"] = "Impossible de traiter les données".$e->getMessage();
    }//Fin try catch

}//Fin traitement du formulaire


renderView(
    "billet-formulaire",
    [
        "pageTitle" => "billet-formulaire",
        "errors" => $errors
    ]
);