<?php

session_start();


 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=neptune;charset=utf8', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM clients WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['email']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE clients SET email = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profilfinit.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = ($_POST['newmdp1']);
      $mdp2 = ($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE clients SET pass = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profilfinit.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
   
?>
<html>
   <head>
      <title>profil</title>
      <link href="../pages/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/test2.css">

    

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->

    

    
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
   </head>
   <body>
   
   <div align ="center">
   <a class="retour" href="../clients/accueil.php"> <h2>Revenir à l'accueil</h2></a>
      <br><br><br>
     
         <h2>Edition de mon profil</h2>
         <div class="justify-content-center py-5">
            <form method="POST" action="">
               <label>Modifiez votre email :</label>
               <input id="cs" type="text" name="newmail" class="form-control" placeholder="Mail" value="<?php echo $user['email']; ?>" /><br /><br />
               <label>Entrez un nouveau mot de passe :</label>
               <input id="cs" type="password" name="newmdp1" class="form-control" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input id="cs" type="password" name="newmdp2" class="form-control" placeholder="Confirmation du mot de passe" /><br /><br />
               <input type="submit" class="w-40 btn btn-lg btn-primary" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </div>
   </body>
</html>
<?php   
}

require '../components/footer.php';

?>