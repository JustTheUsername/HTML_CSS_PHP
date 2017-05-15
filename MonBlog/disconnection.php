<?php
session_start();
session_destroy(); // vide la session

header("Location: index.php"); // renvois sur la page d'acceuil