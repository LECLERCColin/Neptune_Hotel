<?php require 'headeradmin.php'; ?>

<main>



<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3><strong>Ajouter une chambre</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      

      
        
      <div class="col-md-5">
      <br><br>
          <h4 id="c"><strong>Information de la chambre</strong></h4>
         
          <form action="insertcham.php" method="post">
            <select class="form-select" aria-label="Default select example" name="capacite">
                <option selected >Capacité </option>
                <option value="2">Capacité : 2</option>
                <option value="3">Capacité : 3</option>
                <option value="4">Capacité : 4</option>
                </select><br>
            <select class="form-select" aria-label="Default select example" name="exposition">
                <option selected >Exposition</option>
                
                <option value="rempart">Rempart</option>
                <option value="port">Port</option>
            </select><br>
            <select class="form-select" aria-label="Default select example" name="douche">
                <option selected >Douche</option>
                
                <option value="1">Avec Douche : 1</option>
                <option value="0">ans Douche : 0</option>
                </select><br>
            
            <select class="form-select" aria-label="Default select example" name="etage">
                <option selected >Etage</option>
                
                <option value="1">Etage : 1</option>
                <option value="2">Etage : 2</option>
                <option value="3">Etage : 3</option>
              
                
                </select><br>
                <select class="form-select" aria-label="Default select example" name="pchambre">
                <option selected >Photo Chambre</option>
                
                <option value="chambre2p.jpg">Chambre 2 personnes vue port</option>
                <option value="chambre2r.jpg">Chambre 2 personnes vue rempart</option>
                <option value="chambre3p.jpg">Chambre 3 personnes vue port</option>
                <option value="chambre3r.jpg">Chambre 3 personnes vue rempart</option>
                <option value="chambre4p.jpg">Chambre 4 personnes vue port</option>
                <option value="chambre4r.jpg">Chambre 4 personnes vue rempart</option>
                
                </select><br>
            <div class="form-group">
            <input type="text" class="form-control" name="tarif_id" value="" placeholder="N°Tarif">
            </div><br>
            <button class="btn btn-primary" type="submit" >
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enregistrer les modifications
          </button>
          </form>
        
      
    
    </div>
  </div>