<?php


function getCommentDate($commentID){

    $bdd = getBDD();

    $date =  $bdd->query('SELECT DATE( date ) AS date_part, TIME( date ) AS time_part FROM comments where id='.$commentID);

    return $date;


}


function getComments($postId){
    $bdd = getBDD();

    $comments = $bdd->query('SELECT comments.id,comments.content,users.nickname FROM comments JOIN posts ON `post_id`= posts.id JOIN users on comments.author_id=users.id WHERE post_id ='.$postId);

    return $comments;

}
