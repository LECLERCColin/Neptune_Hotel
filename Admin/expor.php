<?php
 require 'headeradmin.php';
 if($_POST['cham'] == 1){
     $a = 1;
     $b = 3;
     $c = 5;
     $e = 9;
     $r = 11;
     $d = 'chambre2p';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar2 WHERE id_cham = :cham2');
            $updateavatar->execute(array(
               'avatar2' => $d.".".$extensionUpload,
               'cham2' => $b
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar3 WHERE id_cham = :cham3');
            $updateavatar->execute(array(
               'avatar3' => $d.".".$extensionUpload,
               'cham3' => $c
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar4 WHERE id_cham = :cham4');
            $updateavatar->execute(array(
               'avatar4' => $d.".".$extensionUpload,
               'cham4' => $e
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar5 WHERE id_cham = :cham5');
            $updateavatar->execute(array(
               'avatar5' => $d.".".$extensionUpload,
               'cham5' => $r
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
}elseif($_POST['cham'] == 2){

    $a = 4;
     $b = 8;
     $c = 10;
     
     $d = 'chambre2r';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar2 WHERE id_cham = :cham2');
            $updateavatar->execute(array(
               'avatar2' => $d.".".$extensionUpload,
               'cham2' => $b
               ));
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar3 WHERE id_cham = :cham3');
            $updateavatar->execute(array(
               'avatar3' => $d.".".$extensionUpload,
               'cham3' => $c
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}

}elseif($_POST['cham'] == 3){

    $a = 6;
    
     
     $d = 'chambre3r';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}

}elseif($_POST['cham'] == 4){

    $a = 7;
    
     
     $d = 'chambre3p';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}

}elseif($_POST['cham'] == 5){

    $a = 2;
    
     
     $d = 'chambre4r';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}

}elseif($_POST['cham'] == 6){

    $a = 12;
    
     
     $d = 'chambre4p';
    
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$d.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE chambres SET avatar = :avatar WHERE id_cham = :cham');
            $updateavatar->execute(array(
               'avatar' => $d.".".$extensionUpload,
               'cham' => $a
               ));
            
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Image enregistrée</H1>
    <a href="photochambre.php" class="btn btn-primary">Retour aux ajout d'images</a>
</body>
</html>