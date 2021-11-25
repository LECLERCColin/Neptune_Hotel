<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('INSERT INTO planning VALUES (NULL, :chambre_id, :jour, :acompte, :paye, :client_id)');

$req->bindValue(':chambre_id', $_POST['chambre_id'], PDO::PARAM_INT);
$req->bindValue(':jour', $_POST['jour'], PDO::PARAM_STR);
$req->bindValue(':acompte', $_POST['acompte'], PDO::PARAM_INT);
$req->bindValue(':paye', $_POST['paye'], PDO::PARAM_INT);
$req->bindValue(':client_id', $_POST['client_id'], PDO::PARAM_INT);

$insert = $req->execute();

if($insert){
    $message = 'La réservation a bien été enregistrée';
   
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
    <title>NewRes</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="Administrationres.php" class="btn btn-dark">Retour a la liste de réservations</a>
</body>
</html>