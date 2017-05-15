<?php

function getPosts(){
    $bdd = getBDD();

    $posts = $bdd->query('SELECT posts.id, posts.title, posts.content,posts.date, users.nickname,categories.name FROM posts JOIN users on author_id=users.id JOIN categories on posts.category_id = categories.id ORDER BY date DESC LIMIT 5');
    //$posts = $bdd->query('SELECT posts.id, posts.title, posts.content,posts.date, users.nickname FROM posts JOIN users on author_id=users.id ORDER BY date DESC LIMIT 5  ');
    return $posts;

}

function  getFullPost($postId){
    $bdd = getBDD();

    $post = $bdd->query('SELECT posts.id, posts.title, posts.content,posts.date, users.nickname FROM posts JOIN users on author_id=users.id WHERE posts.id='.$postId);

    return $post;
}



function getPostDate($postID){
    $bdd = getBDD();

    $date =  $bdd->query('SELECT DATE( date ) AS date_part, TIME( date ) AS time_part FROM posts where id='.$postID);

    return $date;

}


