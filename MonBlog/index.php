
<?php
//session_start();
require 'model\model.php';
require 'model\posts.php';
require 'model\users.php';

$posts = getPosts();



require 'view\mainView.php';
