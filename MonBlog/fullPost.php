<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 03/05/2017
 * Time: 16:31
 */

session_start();
require 'model\model.php';
require 'model\posts.php';
require 'model\comments.php';
require 'model\addComment.php';
$idPost = $_GET['post'];


$post = getFullPost($idPost);

$t = getFullPost($idPost);

$comments = getComments($idPost);

$title = $t->fetch()['title'];

require 'view\postView.php';
