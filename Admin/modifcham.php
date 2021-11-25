<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('SELECT * FROM chambres WHERE id_cham = :num');

$req->bindValue(':num',$_GET['id_cham'],PDO::PARAM_INT);

$execute = $req->execute();

$chambre = $req->fetch();
?>
<main>



<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3><strong>Modifier la chambre</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      

      
        
      <div class="col-md-5">
      <br><br>
          <h4 id="c"><strong>Information de la chambre</strong></h4>
         
          <form action="modif2cham.php" method="post">
            <input type="hidden" name="IDCham" value="<?= $chambre['id_cham']; ?>">
            <select class="form-select" aria-label="Default select example" name="capacite">
                <option selected value="<?= $chambre['capacite']; ?>">Capacité :<?= $chambre['capacite']; ?></option>
                <option value="2">Capacité : 2</option>
                <option value="3">Capacité : 3</option>
                <option value="4">Capacité : 4</option>
                </select><br>
            <select class="form-select" aria-label="Default select example" name="exposition">
                <option selected value="<?= $chambre['exposition']; ?>">Exposition :<?= $chambre['exposition']; ?></option>
                
                <option value="rempart">Rempart</option>
                <option value="port">Port</option>
            </select><br>
            <select class="form-select" aria-label="Default select example" name="douche">
                <option selected value="<?= $chambre['douche']; ?>">Douche :<?= $chambre['douche']; ?></option>
                
                <option value="1">Avec Douche : 1</option>
                <option value="0">ans Douche : 0</option>
                </select><br>
            
            <select class="form-select" aria-label="Default select example" name="etage">
                <option selected value="<?= $chambre['etage']; ?>">Etage :<?= $chambre['etage'];?></option>
                
                <option value="1">Etage : 1</option>
                <option value="2">Etage : 2</option>
                <option value="3">Etage : 3</option>
              
                
                </select><br>
                <select class="form-select" aria-label="Default select example" name="pchambre">
                <option selected value="<?= $chambre['avatar']; ?>">Photo Chambre :<?= $chambre['avatar'];?></option>
                
                <option value="chambre2p.jpg">Chambre 2 personnes vue port</option>
                <option value="chambre2r.jpg">Chambre 2 personnes vue rempart</option>
                <option value="chambre3p.jpg">Chambre 3 personnes vue port</option>
                <option value="chambre3r.jpg">Chambre 3 personnes vue rempart</option>
                <option value="chambre4p.jpg">Chambre 4 personnes vue port</option>
                <option value="chambre4r.jpg">Chambre 4 personnes vue rempart</option>
                
                </select><br>
            <button class="btn btn-primary" type="submit" >
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enregistrer les modifications
          </button>
          </form>
        
      </div>
      
    
    </div>
  </div>