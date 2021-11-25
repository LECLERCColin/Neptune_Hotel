<?php require 'headeradmin.php'; ?>

<main>



<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3><strong>Ajoutez un nouveau client</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      

      
        
      <div class="col-md-5">
      <br><br>
          <h4 id="c"><strong>Information du client</strong></h4>
          <form action="insertion.php" method="post">
            <select class="form-select" aria-label="Default select example" name="civilite">
                <option selected>Civilité</option>
                <option value="Monsieur">Monsieur : 1</option>
                <option value="Mademoiselle">Mademoiselle : 2</option>
                </select><br>
            <div class="form-group">
              <input type="text" class="form-control" name="nom" value="" placeholder="Nom">
            </div><br>
            <div class="form-group">
              <input type="texst" class="form-control" name="prenom" value="" placeholder="Prénom">
            </div><br>
            <div class="form-group">
              <input type="text" class="form-control" name="adresse" value="" placeholder="Adresse">
            </div>
            <br>
            <div class="form-group">
              <input type="tel" class="form-control" name="codePostal" value="" placeholder="CodePostal">
            </div><br>
            <div class="form-group">
              <input type="text" class="form-control" name="ville" value="" placeholder="Ville">
            </div><br>
            <select class="form-select" aria-label="Default select example" name="pays_id">
                <option selected>Pays</option>
                <option value="1">France : 1</option>
                <option value="2">Grande-Bretagne : 2</option>
                <option value="3">Belgique : 3</option>
                <option value="4">Suisse : 4</option>
                </select><br>
            <button class="btn btn-primary" type="submit" >
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enregistrer le nouveu client
          </button>
          </form>
        
      </div>
      <div class="col-lg-5">
        <img id="img" src="./image/clients.jpg" alt="" width="400px" height="400px" > 
    </div>
    
    </div>
  </div>