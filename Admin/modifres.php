<?php require 'headeradmin.php'; ?>
<?php 

$req = $bdd->prepare('SELECT * FROM planning WHERE id_res = :num');

$req->bindValue(':num',$_GET['id_res'],PDO::PARAM_INT);

$execute = $req->execute();

$planning = $req->fetch();
?>
<main>



<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3><strong>Modifier la réservation</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      

      
        
      <div class="col-md-5">
      <br><br>
          <h4 id="c"><strong>Information de la réservation</strong></h4>
         
          <form action="modif2res.php" method="post">
            <input type="hidden" name="IDRes" value="<?= $planning['id_res']; ?>">
            <select class="form-select" aria-label="Default select example" name="acompte">
                <option selected value="<?= $planning['acompte']; ?>">Acompte :<?= $planning['acompte']; ?></option>
                
                <option value="1">Versé : 1</option>
                <option value="0">Non versé : 0</option>
                </select><br>
                
            <select class="form-select" aria-label="Default select example" name="paye">
                <option selected value="<?= $planning['paye']; ?>">Paye :<?= $planning['paye']; ?></option>
                
                <option value="1">Payé : 1</option>
                <option value="0">Non Payé : 0</option>
                </select><br>
            <div class="form-group">
              <input type="datetime-local" class="form-control" name="jour" value="<?= $planning['jour']; ?>" placeholder="Jour">
            </div><br>
            
            <select class="form-select" aria-label="Default select example" name="chambre_id">
                <option selected value="<?= $planning['chambre_id']; ?>">N°Chambre :<?= $planning['chambre_id'];?></option>
                
                <option value="1">Port : 1</option>
                <option value="2">Rempart : 2</option>
                <option value="3">Port : 3</option>
                <option value="4">Rempart : 4</option>
                <option value="5">Port : 5</option>
                <option value="6">Rempart : 6</option>
                <option value="7">Port : 7</option>
                <option value="8">Rempart : 8</option>
                <option value="9">Rempart : 9</option>
                <option value="10">Rempart : 10</option>
                <option value="11">Port : 11</option>
                <option value="12">Port : 12</option>
                
                </select><br>
            <button class="btn btn-primary" type="submit" >
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enregistrer les modifications
          </button>
          </form>
        
      </div>
      <div class="col-lg-5">
        <img id="img" src="./image/reserv.jpg" alt="" width="400px" height="400px" > 
    </div>
    
    </div>
  </div>