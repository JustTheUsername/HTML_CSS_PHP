<?php

function getBDD(){

    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'Benjamin', 'Azertyuiop9');

    return $bdd;
}

