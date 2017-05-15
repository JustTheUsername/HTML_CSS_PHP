<?php


require 'model.php';

if(isset($_POST['Publish'])) { // si le bouton "Connexion" est appuyé

    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)

    if(empty($_POST['title'])) {

        echo "Le champ Titre est vide.";
    } else {

        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['content'])) {

            echo "Le champ Contenue est vide.";
        } else {

            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:

            $Title = htmlentities($_POST['title'], ENT_QUOTES, "UTF-8"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $Content = htmlentities($_POST['content'], ENT_QUOTES, "UTF-8");
            $Category = intval($_POST['categorie']);


                $bdd=getBDD();
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $req = $bdd->prepare('INSERT INTO posts (author_id, content, title, category_id)VALUES(:author,:text,:titre,:category) ');

                $req->execute(array(
                    'text' => $Content,
                    'titre' => $Title,
                    'author' => $_SESSION['id'],
                    'category'=>$Category
                ));
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat

                    header("Location: index.php"); //renvois sur la page d'acceuil

                }
            }

}
