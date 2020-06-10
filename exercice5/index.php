<!DOCTYPE html>
<html lang="fr">
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
            <option value="" disabled selected>--</option>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="lastname">Votre nom :</label>
        <input type="text" name="lastname" pattern="[a-zA-Z]+" required>
        <label for="lastname">Votre prénom :</label>
        <input type="text" name="firstname" pattern="[a-zA-Z]+" required>
        <input type="submit" value="OK" name="submit">
    </form>
    <?php 
    if (isset($_GET['submit'])) {
        echo 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
    }
    ?>
    
</body>
</html>