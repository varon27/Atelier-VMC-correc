<?php
if ($_POST) {
// errors array
    $errors = array();
//start validation
    if (!$_POST['name']) {
        $errors['name']="Votre nom ne peut pas être vide";
    }
    if (!$_POST['number']) {
        $errors['number']="Votre numéro ne peut pas être vide";
    }
    if (!$_POST['email']) {
        $errors['email']="Votre email ne peut pas être vide";
    }
    if (!$_POST['select']) {
        $errors['select']="Votre sujet ne peut pas être vide";
    }
    if (!($_POST['message'])) {
        $errors['message']="Votre message ne peut pas être vide";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire (>'-')> <( '-'<) ^( ' - ')^ <( '-'<) (>'-')> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="success.php">Voir tout</a>
    <?php

    
        include ('formulaire.php');
    }
    ?>     
</body>
</html>