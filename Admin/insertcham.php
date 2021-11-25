<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('INSERT INTO chambres VALUES (NULL, :capacite, :exposition, :douche, :etage, :tarif_id, :pchambre)');

$req->bindValue(':capacite', $_POST['capacite'], PDO::PARAM_INT);
$req->bindValue(':exposition', $_POST['exposition'], PDO::PARAM_STR);
$req->bindValue(':douche', $_POST['douche'], PDO::PARAM_INT);
$req->bindValue(':etage', $_POST['etage'], PDO::PARAM_INT);
$req->bindValue(':tarif_id', $_POST['tarif_id'], PDO::PARAM_INT);
$req->bindValue(':pchambre', $_POST['pchambre'], PDO::PARAM_STR);
$insert = $req->execute();

if($insert){
    $message = 'La chambre a bien été enregistrée';
   
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
    <title>NewRoom</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administrationcham.php" class="btn btn-dark">Retour a la liste de chambres</a>
</body>
</html>