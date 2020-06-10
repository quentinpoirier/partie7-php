<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
    <h1>exercice5</h1>
    <p>Créer un formulaire sur la page index.php avec : </p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom </li>
    </ul>

    <form action="index.php" method="get">
        <select name="civil" size="1">
            <option>Mr
            <option>Mme
        </select>
        <p>Votre nom : <input type="text" name="lastname" /></p>
        <p>Votre prénom : <input type="text" name="firstname" /></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <?php echo 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';?>
    
</body>
</html>