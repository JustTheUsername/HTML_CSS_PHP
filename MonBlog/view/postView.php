<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./CSS/mainView.css"/>
</head>
<body>
<div id="global">

    <?php foreach ($post as $thatPost):?>

    <h1 class="titrePost"><?= $thatPost['title'] ?></h1>
                    <p><?= $thatPost['date']?> de <?= $thatPost['nickname']?></p>
                <p><?= $thatPost['content'] ?></p>


            <hr />
    <?php endforeach; ?>
    </div> <!-- #contenu -->
<div id="comment">
    <h2>Comments : </h2>
    <?php

    foreach ($comments as $comment):?>

        <p>
            <?= $comment['content']; ?><br />

            <br/> écrit par :  <?= $comment['nickname']; ?> le

            <?php $dateAndTimes = getCommentDate($comment['id']);

            foreach ($dateAndTimes as $dateAndTime):?>

            <?= $dateAndTime['date_part'];?> à <?= $dateAndTime['time_part'];?>

            <?php endforeach;?>
        </p>

        <?php

    endforeach;
    if(isset($_SESSION['pseudo'])){?>
        <form  method="post">
            <textarea name="comment" ></textarea>
            <input type="submit" name="addComment" value="Commenter">

        </form>


    <?php
    }

    ?>

</div>
</body>
</html>