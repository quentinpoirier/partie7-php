<?php
if (isset($_FILES['file'])) {
    $infosfichier = pathinfo($_FILES['file']['name']);
    $extension_upload = $infosfichier['extension'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice8</title>
</head>

<body>
    <h1>exercice8</h1>
    <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
        vérifier que le fichier transmis est bien un fichier pdf.</p>

    <?php

    if (isset($_POST['civil']) && ($_POST['firstname']) && ($_POST['lastname']) && ($_FILES['file']['name'])) {
        $message = 'Bonjour ' . $_POST['civil'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Voici votre fichier : ' . $_FILES['file']['name'] . ' et son extension est : ' . $extension_upload;
        echo $message;
    } else {
    ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
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