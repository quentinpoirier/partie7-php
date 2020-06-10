<?php
$showForm = true;
if (isset($_GET['civil']) && isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $showForm = false;
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>

<body>
    <h1>exercice6</h1>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché.
        Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. </p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom </li>
    </ul>

    <?php
    if (!$showForm) {
        $message = 'Bonjour ' . $_GET['civil'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
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
            <input type="submit" value="OK" name="submit">
        </form>
    <?php
    }
    ?>

</body>

</html>