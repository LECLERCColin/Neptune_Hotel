<?php $bdd = new PDO('mysql:host=127.0.0.1;dbname=neptune;charset=utf8', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


?>
  
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>HotelNeptune</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- CSS only -->
    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->


    

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hotel Neptune</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="accueiladmin.php">Accueil</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="Administration.php" tabindex="-1" aria-disabled="true">Administration_Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Administrationres.php" tabindex="-1" aria-disabled="true">Administration_Réservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Administrationcham.php" tabindex="-1" aria-disabled="true">Administration_Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="photochambre.php" tabindex="-1" aria-disabled="true">Photos_Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../connexion/deconnexion.php">Se déconnecter</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<main>
