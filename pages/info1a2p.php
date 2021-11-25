<style>
#contact{
  margin-bottom: 50px
}

</style>
<?php
$infos = $db->query('SELECT * FROM info where ID = "1"'); 
?>


<section id="contact">
<?php foreach ($infos as $info): ?>
  <div class="container">
    
    
    <div class="row justify-content-around">
      

      

      <div class="col-md-5">
          <h4 id="c"><strong><?php echo $info->Nom; ?></strong></h4>
            <p>De 38 € à 68€ <br>
            <?php echo $info->Description; ?></p>
        <form>
          <a href="?page=connecter" class="btn btn-sm btn-outline-secondary">Réserver</a>
        </form>
        
      </div>
      
      <div class="col-lg-5">
        <img id="img" src="./Admin/membres/avatars/chambre2p.jpg" alt="" width="500px" height="500px" > 
    </div>
    
    </div>
  </div>
  <?php endforeach ?>
</section>
