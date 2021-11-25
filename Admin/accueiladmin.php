<?php
   
    require 'headeradmin.php';
?>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <?php
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $bdd->query('SELECT count(*) as nb from clients');
$data = $res->fetch();
$nb = $data['nb'];
$last = $bdd->query('SELECT * FROM clients ORDER BY id DESC LIMIT 0,5');
$reserv = $bdd->query('SELECT *  FROM planning ORDER BY client_id DESC LIMIT 0,5');
$rese = $bdd->query('SELECT count(*) as nbr from planning');
$datare = $rese->fetch();
$nbr = $datare['nbr'];
$clientxres = $bdd->query('SELECT jour, acompte, paye, nom, prenom  FROM clients, planning WHERE id = client_id ORDER BY jour DESC LIMIT 0,5');


$cham = $bdd->query('SELECT count(id_cham) as nbre from chambres');
$datare = $cham->fetch();
$nbre = $datare['nbre'];
$tarifsxcham = $bdd->query('SELECT id_cham, capacite, exposition, douche, etage, prix  FROM tarifs, chambres WHERE id = tarif_id ORDER BY id_cham DESC LIMIT 0,5');
?>

    <!-- Three columns of text below the carousel -->
    <!-- RONDS-->
    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            
            <img src="./image/clients.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text">Nombre de clients :<br> <?php echo $nb; ?> <br> Derniers clients : <br></p>
              <ul><?php while ($l = $last->fetch()){?>
                <tr>
    
                  <th scope="row"><?= $l['id'] ?></th>
                  <td><?= $l['nom'] ?></td>
                  <td><?= $l['prenom'] ?></td>
                  <td><?= $l['codePostal'] ?></td>
                  <td><?= $l['ville'] ?></td><br>
                  
                </tr><?php } ?></ul>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="Administration.php" class="btn btn-sm btn-outline-secondary" >Modifier</a>
     
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <img src="./image/reserv.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <p class="card-text">Nombre de réservations :<br> <?php echo $nbr; ?> <br> Derniere réservations : </p>
              <ul><?php while ($r = $clientxres->fetch()){?>
                <tr>
    
                  <th scope="row"><?= $r['nom'] ?></th>
                  <td><?= $r['prenom'] ?></td>
                  <td><?= $r['jour'] ?></td>
                  <td><?= $r['acompte'] ?></td>
                  <td><?= $r['paye'] ?></td><br>
                  
                </tr><?php } ?></ul>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">               
                  <a href="Administrationres.php" class="btn btn-sm btn-outline-secondary">Modifier</a>
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
            <img src="./image/chambre.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
            <p class="card-text">Nombre de chambres :<br> <?php echo $nbre; ?> <br> Derniere chambres : </p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">N° chambre</th>
                    <th scope="col">Capacité</th>
                    <th scope="col">Exposition</th>
                    
                    <th scope="col">Prix</th>
                    
                </tr>
            </thead>
            <tbody>
              <ul><?php while ($t = $tarifsxcham->fetch()){?>
                <tr>
    
                  <th scope="row"><?= $t['id_cham'] ?></th>
                  <td><?= $t['capacite'] ?></td>
                  <td><?= $t['exposition'] ?></td>
                  <td><?= $t['prix'] ?></td>
                  <br>
                  
                </tr><?php } ?></ul>
                </tbody>
            </table>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="Administrationcham.php" class="btn btn-sm btn-outline-secondary">Modifier</a>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
  </div>
