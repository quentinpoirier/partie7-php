<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <h1>exercice4</h1>
    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>

    <form action="user.php" method="post">
        <label for="lastname">Votre nom : </label>
        <input type="text" id="lastname" name="lastname" pattern="[a-zA-Z]+" required>
        <label for="firstname">Votre prénom :</label>
        <input type="text" id="firstname" name="firstname" required>
        <input type="submit" value="OK">
    </form>
    
</body>
</html>