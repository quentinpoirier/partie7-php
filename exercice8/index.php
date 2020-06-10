<?php 
if (isset($_FILES['file'])) {
    var_dump($_FILES);
$infosfichier = pathinfo($_FILES['file']['name']);
var_dump($infosfichier);
$extension_upload = $infosfichier['extension'];
var_dump($extension_upload);
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
    $message = 'Bonjour ' . $_POST['civil'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Voici votre fichier : ' . $_FILES['file']['name']; 
    echo $message;
 } else { 
?>
    <form action="index.php" method="post" enctype="multipart/form-data">
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