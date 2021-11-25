<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('UPDATE clients SET  civilite=:civilite, nom=:nom, prenom=:prenom, adresse=:adresse, codePostal=:codePostal, ville=:ville, pays_id=:pays_id WHERE id=:num LIMIT 1');

$req->bindValue(':num', $_POST['IDClient'], PDO::PARAM_INT);
$req->bindValue(':civilite', $_POST['civilite'], PDO::PARAM_STR);
$req->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$req->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$req->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$req->bindValue(':codePostal', $_POST['codePostal'], PDO::PARAM_STR);
$req->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
$req->bindValue(':pays_id', $_POST['pays_id'], PDO::PARAM_STR);



$execute = $req->execute();

 

if($execute){
    $message = 'Le client a bien été mis à jour';
   
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
    <title>Updateclients</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administration.php" class="btn btn-dark">Retour a la liste de clients</a>
</body>
</html>