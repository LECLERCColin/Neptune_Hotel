<?php require '../Admin/headeradmin.php'; ?>

<main>
<link rel="stylesheet" href="../css/test.css">

<style>
header{
   display : none; }
   </style>

<section id="contact">
  <div class="container">
  <br><br>
    <div class="well well-sm">
      <h3 class="align-center"><strong>Inscription</strong></h3>
    </div>
    
    <div  class="row justify-content-around align-center">
      

         
      
         <br>
         <br /><br />
          
          
          <form action="insertinscrip.php" method="post">
          <div  class="col-md-5 align-center">
         <br><br>
         <img class="mb-4" src="../image/logo-hotel.png" alt="" width="72" height="57">
         <h1 class="h3 mb-3 fw-normal">Identifiants</h1>
         <label for="email" class="visually-hidden">Adresse Email</label>
         <input type="email" id="email" class="form-control" name="email" id="email" placeholder="Entrez un email valide" value="<?php if(isset($email)) { echo $email; } ?>" />
         <br>
         <label for="mdp" class="visually-hidden">Mot de passe</label>
         <input type="password" id="mdp" class="form-control" name="pass" placeholder="Entrez un mot de passe valide" />
         <br><br><br><br>
         <h1 class="h3 mb-3 fw-normal">Informations</h1>
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
                <input type="submit" class="w-40 btn btn-lg btn-primary" name="forminscription" value="S'inscire" />

            <br>
            <p id="cr" class="box-register w-100 btn btn-lg ">Déjà inscrit? <a href="connecter.php" >Connectez-vous ici</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
          </form>
      
        
      </div>
     
    
    </div>
  </div>



