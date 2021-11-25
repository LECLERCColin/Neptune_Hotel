<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('UPDATE planning SET  chambre_id=:chambre_id, jour=:jour, acompte=:acompte, paye=:paye WHERE id_res=:num LIMIT 1');
$req->bindValue(':num', $_POST['IDRes'], PDO::PARAM_INT);
$req->bindValue(':chambre_id', $_POST['chambre_id'], PDO::PARAM_STR);

$req->bindValue(':jour', $_POST['jour'], PDO::PARAM_STR);
$req->bindValue(':acompte', $_POST['acompte'], PDO::PARAM_STR);
$req->bindValue(':paye', $_POST['paye'], PDO::PARAM_STR);


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
    <title>Updateclients</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administrationres.php" class="btn btn-dark">Retour a la liste de Réservations</a>
</body>
</html>