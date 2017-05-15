<?php

require 'model.php';

if(isset($_POST['inscription'])) { // si le bouton "Connexion" est appuyé

// on vérifie que le champ "Pseudo" n'est pas vide
// empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)

    if (empty($_POST['pseudo'])) {

        echo "Veuillez entrer un pseudo.";
    } else {

// on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if (empty($_POST['pass'])) {

            echo "Veuillez saisir un mot de passe.";
        } else {


            if ($_POST['pass'] !== $_POST['confirmPass']) {

                echo "Les mots de passe ne correspondent pas";

            } else {

// les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:

                $nickname = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
                $password = htmlentities($_POST['pass'], ENT_QUOTES, "ISO-8859-1");

                if (preg_match('/[^a-z_\-0-9]/i', $nickname)) {
                    echo "pseudo invalide";
                } else {
                    $bdd = getBDD();
// on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                    $req = $bdd->prepare('INSERT INTO users (nickname, password)VALUES(:nickname,:password) ');

                    $req->execute(array(
                        'nickname' => $nickname,
                        'password' => $password

                    ));


                    header("Location: index.php"); //renvois sur la page d'acceuil

                }
            }
        }

    }
}
