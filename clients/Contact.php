<?php
    require 'headerclient.php';
?>
<link rel="stylesheet" href="../css/test.css">

<main>



<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contactez nous</strong></h3>
    </div>
    
    <div class="row justify-content-around">
      <div class="col-md-20">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.914877508378!2d3.9716488157749334!3d43.54581626738545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6bb3f6f499f5b%3A0xa4273d08bd579ecb!2sThe%20Originals%20Boutique%2C%20H%C3%B4tel%20Neptune%2C%20Montpellier%20Sud%20(Inter-Hotel)!5e0!3m2!1sfr!2sfr!4v1610555667453!5m2!1sfr!2sfr" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      
        
      <div class="col-md-5">
          <h4 id="c"><strong>Entrer en contact</strong></h4>
          <form action="Contact.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="sujet" value="" placeholder="Nom">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="mail" value="" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="telephone" value="" placeholder="Telephone">
            </div>
            
            <div class="form-group">
              <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-default" type="submit" name="envoyer">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Envoyer
          </button>
          </form>
        
      </div>
      <div class="col-lg-5">
        <img id="img" src="../image/logo-hotel.png" alt="" width="300px" height="300px" > 
    </div>
    
    </div>
  </div>
  <?php
$VotreAdresseMail="neptunehotelprojet@gmail.com";//mettez ici votre adresse mail
if(isset($_POST['envoyer'])) { // si le bouton "Envoyer" est appuyé
    //on vérifie que le champ mail est correctement rempli
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
        //on vérifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entrée est incorrecte";
        }else{
            //on vérifie que le champ sujet est correctement rempli
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                if(empty($_POST['telephone'])) {
                  echo "Le champ telephone est vide";
                }else{
                  //on vérifie que le champ message n'est pas vide
                  if(empty($_POST['message'])) {
                      echo "Le champ message est vide";
                  }else{
                      //tout est correctement renseigné, on envoi le mail
                      //on renseigne les entêtes de la fonction mail de PHP
                      $Entetes = "MIME-Version: 1.0\r\n";
                      $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                      $Entetes .= "From: NeptuneHotel <".$_POST['mail'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                      $Entetes .= "Reply-To: NeptuneHotel <".$_POST['mail'].">\r\n";
                      //on prépare les champs:
                      $Mail=$_POST['mail']; 
                      $telephone = $_POST['telephone'];
                      $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                      $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8")."\n";
                      $Message.= $telephone;//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                      //en fin, on envoi le mail
                      if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                          echo "Le mail à été envoyé avec succès!";
                      } else {
                          echo "Une erreur est survenue, le mail n'a pas été envoyé";
                      }
                  }
              }
          }
      }
  }
}
?>
</section>

<?php
    require '../components/footer.php';
    ?>
