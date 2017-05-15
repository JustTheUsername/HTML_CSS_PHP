<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Poste</title>
    <link rel="stylesheet" href="./CSS/mainView.css"/>
</head>
<body>
<form method="post" action="">
    <p>

        <label for="title">Titre </label> : <input type="text" name="title" placeholder="Saisissez un titre"id="title" />
        <br />
        <label for="content">Texte :</label><br>
        <textarea name="content" ></textarea>
        <br/>
    <p>
        <label for="categorie">Categorie : </label>
        <select name="categorie" id="categorie">
                <option value="1">Phasellus</option>
                <option value="2">gravida</option>
                <option value="3">ipsum</option>
                <option value="4">massa</option>
                <option value="5">nunc</option>
                <option value="6">nonummy</option>
                <option value="7">risus</option>
                <option value="8">aliquam</option>
                <option value="9">nostra</option>
                <option value="10">vel</option>
        </select>
    </p>
        <input type="submit" value="Publier" name="Publish" id="Publish">


</form>


</body>
</html>