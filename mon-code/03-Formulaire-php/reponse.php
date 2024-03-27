<?php

var_dump($_POST);

echo "<p>";

if($_POST){
    echo "contenu de post";
    print_r($_POST);
}
echo "</p>";

?>


<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bom Dia Formulaire!</title>
</head>

<body>

    <h1>Bom dia, <?=strip_tags($_POST['nom']);?> <?=strip_tags($_POST['prenom']);?></h1>
    <p>Votre année de naissance est le : <?=strip_tags($_POST['année']);?></p>
    <p>Voici votre identifiant que vous avez choisi : <?=strip_tags($_POST['identifiant']);?></p>
    <p>Votre mot de passe est : <?=strip_tags($_POST['motDePasse']);?></p>
    <p>Vous êtes de sexe : <?=strip_tags($_POST['sexe']);?></p>
    <p>Et vous débutez en PHP : <?=strip_tags($_POST['php']);?></p>

</body>

</html>