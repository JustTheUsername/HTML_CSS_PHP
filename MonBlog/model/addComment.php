<?php


if(isset($_POST['addComment'])){

    $comment = (isset($_POST['comment']) && !empty($_POST['comment']))? $_POST['comment'] : null; //si comment exist et qu'il est pas vide comment = le commentaire sinon comment = null
    $postId = (isset($_GET['post']) && !empty($_GET['post']))? $_GET['post'] : null; //si comment exist et qu'il est pas vide comment = le commentaire sinon comment = null


    if(!is_null($comment) && !is_null($postId)) {

            $postId = intval($postId);
            $bdd = getBDD();

            $req = $bdd->prepare('INSERT INTO comments (author_id, post_id, content)VALUES(:author,:post,:content) ');

            $req->execute(array(
                    'author' => $_SESSION['id'],
                    'post' => $postId,
                    'content' => $comment

                )
            );


    }

}