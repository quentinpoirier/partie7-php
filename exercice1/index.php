<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>

    <form action="user.php" method="get">
        <p>Votre nom : <input type="text" name="lastname" /></p>
        <p>Votre prénom : <input type="text" name="firstname" /></p>
        <p><input type="submit" value="OK"></p>
    </form>
    
</body>
</html>