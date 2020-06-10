<?php
var_dump($_GET);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice7</title>
</head>
<body>
    <h1>exercice7</h1>
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
    Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

    <?php
 if (isset($_GET['civil']) && isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $message = 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '.Votre fichier envoyé : ' . $_GET['file']; 
    echo $message;
 } else { 
     ?>
    <form action="index.php" method="get">
            <select name="civil" size="1">
                <option value="" disabled selected>--</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label for="lastname">Votre nom :</label>
            <input type="text" name="lastname" pattern="[a-zA-Z]+" required>
            <label for="lastname">Votre prénom :</label>
            <input type="text" name="firstname" pattern="[a-zA-Z]+" required>
            <label for="file">Votre fichier :</label>
            <input type="file" name="file" id="file">
            <input type="submit" value="OK" name="submit">
        </form>
    <?php
    }
    ?>
    
</body>
</html>