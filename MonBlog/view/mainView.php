<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="./CSS/mainView.css"/>
    <title>MTGN</title>
</head>
<body>
<div id="global">
    <header class="mainHeader">
        <a href="index.php"><h1 id="titreBlog"> Magic the Gathering pour les Nuls</h1></a>
        <?php
        if (!isset($_SESSION['pseudo'])) {
            ?> <!-- verifie si l' array session ne contient pas un pseudo -->
        <form method="post" action="">
            <ul>

                        <li><input type="text" name="pseudo" placeholder="Pseudo"id="pseudo" /></li>
                        <li><input type="password" placeholder="Mot de passe" name="pass" id="pass" /></li>
                        <li><input type="submit" value="Connexion" name="Connection" id="Connection"></li>
                        <a href="signUp.php" class="inscriprtion">Inscription</a>
            </ul>

                </form>


        <?php } else {

            ?>

            <ul>
                <li><a href="#"><?= $_SESSION['pseudo'] ?></a></li>
                <li><a href="disconnection.php">Deconnexion</a></li>
                <li><a href="newPost.php">Nouveau Poste</a></li>
            </ul>

        <?php } ?>

    </header>
    <div class="post">
        <?php foreach ($posts as $post):;?>
            <article>
                <header>
                    <h1 class="titrePost"><?= $post['title'] ?></h1>
                    <p class="infoPost"> de <?= $post['nickname'] ?>
                        <?php $dateAndTimes = getPostDate($post['id']);

                        foreach ($dateAndTimes as $dateAndTime): ?>


                        le <?php echo $dateAndTime['date_part']; ?> à <?php echo $dateAndTime['time_part']; ?>
                        <strong class="category"> catégorie : <?php echo $post['name']?></strong>
                    </p>
                    <?php endforeach; ?>


                </header>

                <p class="content"><?= (strlen($post['content']) > 150) ? substr($post['content'], 0, 150) . "..." : $post['content']; ?>
                    <a href="fullPost.php?post=<?php echo $post['id'] ?>" id=<?php echo $post['id'] ?> target="_blank">
                        Lire
                        la suite...</a></p>
            </article>
            <hr/>
        <?php endforeach; ?>
    </div> <!-- #contenu -->
    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.<strong class="backtop"><a href="#">Retourner en haut ↑</a> </strong>
    </footer>
</div> <!-- #global -->
</body>
</html>