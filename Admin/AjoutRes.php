<?php require 'headeradmin.php'; ?>

<main>



<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3><strong>Ajoutez une nouvelle réservation</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      

      
        
      <div class="col-md-5">
      <br><br>
          <h4 id="c"><strong>Information de la réservation</strong></h4>
          <form action="insertres.php" method="post">
            <select class="form-select" aria-label="Default select example" name="acompte">
                <option selected >Acompte</option>
                
                <option value="1">Versé : 1</option>
                <option value="0">Non versé : 0</option>
                </select><br>
                
            <select class="form-select" aria-label="Default select example" name="paye">
                <option selected >Paye </option>
                
                <option value="1">Payé : 1</option>
                <option value="0">Non Payé : 0</option>
                </select><br>
            <div class="form-group">
              <input type="datetime-local" class="form-control" name="jour" " placeholder="Jour">
            </div><br>
            
            <select class="form-select" aria-label="Default select example" name="chambre_id">
                <option selected >N°Chambre </option>
                
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
               
                <div class="form-group">
                <input type="text" class="form-control" name="client_id" value="" placeholder="N°Client">
                </div><br>
            <button class="btn btn-primary" type="submit" >
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enregistrer les modifications
          </button>
          </form>
        
      </div>
      <div class="col-lg-5">
        <img id="img" src="./image/clients.jpg" alt="" width="400px" height="400px" > 
    </div>
    
    </div>
  </div>