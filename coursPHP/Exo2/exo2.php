<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="exo2.css">
</head>
<body>
    <h1 class="titreBleu"> Formulaire </h1>
    <form action="#">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" required>
            <label for="age">Age : </label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
</body>
</html>