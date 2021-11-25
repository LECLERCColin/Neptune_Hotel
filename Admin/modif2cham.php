<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('UPDATE chambres SET  capacite=:capacite, exposition=:exposition, douche=:douche, etage=:etage, avatar=:pchambre WHERE id_cham=:num LIMIT 1');
$req->bindValue(':num', $_POST['IDCham'], PDO::PARAM_INT);
$req->bindValue(':capacite', $_POST['capacite'], PDO::PARAM_STR);

$req->bindValue(':exposition', $_POST['exposition'], PDO::PARAM_STR);
$req->bindValue(':douche', $_POST['douche'], PDO::PARAM_STR);
$req->bindValue(':etage', $_POST['etage'], PDO::PARAM_STR);
$req->bindValue(':pchambre', $_POST['pchambre'], PDO::PARAM_STR);

$execute = $req->execute();



if($execute){
    $message = 'La réservation a bien été mis à jour';
   
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
    <title>Updatechambres</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administrationcham.php" class="btn btn-dark">Retour a la liste de Chambres</a>
</body>
</html>