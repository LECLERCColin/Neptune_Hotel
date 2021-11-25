<?php 
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=neptune;charset=utf8', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


?>
<?php 

$pdostat = $bdd->prepare('INSERT INTO clients VALUES (NULL, :civilite, :nom, :prenom, :adresse, :codePostal, :ville, :pays_id, :email, :pass)');
$pdostat->bindvalue(':civilite', $_POST['civilite'], PDO::PARAM_STR);
$pdostat->bindvalue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdostat->bindvalue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdostat->bindvalue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$pdostat->bindvalue(':codePostal', $_POST['codePostal'], PDO::PARAM_STR);
$pdostat->bindvalue(':ville', $_POST['ville'], PDO::PARAM_STR);
$pdostat->bindvalue(':pays_id', $_POST['pays_id'], PDO::PARAM_STR);
$pdostat->bindvalue(':email', $_POST['email'], PDO::PARAM_STR);
$pdostat->bindvalue(':pass', $_POST['pass'], PDO::PARAM_STR);



$insert = $pdostat->execute();

if($insert){
    $message = 'Le client a bien été enregistrée';
   
}else{
    $message = 'echec';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newclients</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administration.php" class="btn btn-dark">Retour a la liste de clients</a>
</body>
</html>