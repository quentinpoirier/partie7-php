


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    <h1>exercice6</h1>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. 
    Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  </p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom </li>
    </ul>

    <?php
 if (isset($_GET['civil']) && ($_GET['firstname']) && ($_GET['lastname'])) {
    $message = 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname']; 
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
        <p><input type="submit" value="OK"></p>
    </form>
    <?php
    }
    ?>
    
</body>
</html>