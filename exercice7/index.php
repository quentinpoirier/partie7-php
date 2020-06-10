<!DOCTYPE html>
<html lang="en">
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
 if (isset($_GET['civil']) && ($_GET['firstname']) && ($_GET['lastname']) && ($_GET['file'])) {
    $message = 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '.Votre fichier envoyé : ' . $_GET['file']; 
    echo $message;
 } else { 
     ?>
    <form action="index.php" method="get">
        <select name="civil" size="1">
            <option>Mr
            <option>Mme
        </select>
        <p>Votre nom : <input type="text" name="lastname"></p>
        <p>Votre prénom : <input type="text" name="firstname"></p>
        <p>Votre fichier : <input type="file" name="file"></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <?php
    }
    ?>
    
</body>
</html>