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
    <link href="../css/carousel.css" rel="stylesheet">
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
            <a class="nav-link" aria-current="page" href="accueil.php">Accueil</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="chambre.php" tabindex="-1" aria-disabled="true">Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../connexion/profilclient.php">Mon Compte</a>
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

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="../image/193280014.png" class="d-block w-100" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Piscine d'extérieur </h1>
            <p>Parfait pour se détendre après une grosse journée.</p>
            <p><a class="btn btn-lg btn-primary" href="?page=connecter" role="button">Inscrivez vous</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="../image/panorama_carnon.jpg" class="d-block w-100" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Port de Carnon</h1>
            <p>Zone touristique agréable pour se détendre et profiter en famille.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.mauguio-carnon.com/ma-ville/activite-economique/port-de-plaisance" role="button">En savoir plus</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="../image/Montpellier_Sud_Hotel_Neptune_The_Originals_Boutique_ex_Inter-Hotel-Mauguio-Carnon-Einzelzimmer_Komf.png" class="d-block w-100" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Chambres avec vue sur la mer</h1>
            <p>Chambres d'une propreté impeccable et luxueuses.</p>
            <p><a class="btn btn-lg btn-primary" href="?page=chambre" role="button">Voir les chambres</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
  </div>