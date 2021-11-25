
<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=neptune', 'root', '');
if(isset($_POST['formconnexion'])) { //si cette variable existe alors on peut continuer BOUTON
   $emailconnect = htmlspecialchars($_POST['emailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);

   

   if(!empty($emailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM clients WHERE email = ? AND pass = ?");
      $requser->execute(array($emailconnect, $mdpconnect)); // probleme avec rowcount qui s'en fou du mdp mit et reste a 0
      $userexist = $requser->rowCount();  // fonction qui permet de compter le nombre de rangées avec ce qu'a saisi l'utilisateur
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['email'] = $userinfo['email'];
   
         if($userinfo['email'] == 'admin@gmail.com'){
            header("Location: ../Admin/accueiladmin.php?id=".$_SESSION['id']);
         } else {
            header("Location: ../clients/accueil.php?id=".$_SESSION['id']);
         }
      } else {
         $erreur = "Mauvais email ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<html>
   <head>
      <title>CONNEXION</title>
      <meta charset="utf-8">
      <link href="../pages/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/test2.css">
    

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->

    

    
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
   </head>
   <body>
      <div class="align-center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="post" action="">
		 <img class="mb-4" src="../image/logo-hotel.png" alt="" width="72" height="57">
    	<h1 class="h3 mb-3 fw-normal">Merci de vous connecter</h1>
    	<label for="inputEmail" class="visually-hidden">Adresse Email</label>
		<input type="email" id="inputEmail" class="form-control" name="emailconnect" placeholder="Entrez votre Email" />
      <br>
		<label for="inputPass" class="visually-hidden">Mot de passe</label>
		<input type="password" id="inputPass" class="form-control" name="mdpconnect" placeholder="Entrez votre mot de passe" />
		<br /><br />
		<input class="w-30 btn btn-lg btn-primary" type="submit" name="formconnexion" value="Se connecter !" />
      <br>
      <p id="cr" class="box-register w-100 btn btn-lg ">Pas encore inscrit? <a href="register.php" >Inscrivez-vous ici</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
		</form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>