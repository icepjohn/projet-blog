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




}//Fin traitement du formulaire


renderView(
    "billet",
    [
        "pageTitle" => "billet",
        "errors" => $errors
    ]
);