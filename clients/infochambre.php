<?php
 require 'headerclient.php';

?>

<?php 
$req=$bdd->prepare(' SELECT avatar, info_id, description, titre FROM infochambre, chambres WHERE info_id = id_cham');
$req->execute();
$ddd=$req->execute();
if(isset($_GET['type'])){
    $id = (int) $_GET['type'];
    $infos=$bdd->prepare('SELECT avatar, description, titre FROM infochambre, chambres WHERE info_id = ? AND info_id = id_cham');
    $infos->execute(array($id));
    $chambres = $infos->fetchAll();  
}

?>
<?php foreach($chambres as $c):?>

<style>
#titre {
    font-size: 50px;

}
#infos {
  font-size: 50px;

}
</style>

<div class="album py-5 bg-light ">
    <div class="container-fluid">

      <div class="row row-cols-1 row-cols-sm-2 g-3 ">
        <div class="col">
          <div class="card shadow-sm align-items-center" id="box">
          <h1 id="titre"><?= $c['titre']?></h1>
          
            <div class="card-body">
                <p class="fs-1" id="description"><?= $c['description']?></p>
                <a href="#" class="btn btn-sm btn-outline-secondary py-2" id="infos">reserver</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
     
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm align-items-center">

            <div class="card-body">
            <img src="../Admin/membres/avatars/<?=$c['avatar']?>" alt="" width="600px" height="500px">

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">              
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<br><br>

<?php endforeach ?>



<?php
require '../components/footer.php';
?>
