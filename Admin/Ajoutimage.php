<?php
 require 'headeradmin.php'; 
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
    <form action="expor.php" method="post" enctype="multipart/form-data" class="album py-5 bg-light position-absolute top-50 start-50 translate-middle">
        <input type="file" name="avatar"><br><br>
        <select class="form-select" aria-label="Default select example" name="cham">
            <option selected>N°Chambre</option>
            <option value="1">Chambres N° 1,3,5,9,11 cp=2 v=p</option>
            <option value="2">Chambres N° 4,8,10 cp=2 v=r</option>
            <option value="3">Chambres N° 6 cp=3 v=r</option>
            <option value="4">Chambres N° 7 cp=3 v=p</option>
            <option value="5">Chambres N° 2 cp=4 v=r</option>
            <option value="6">Chambres N° 12 cp=4 v=p</option>
            </select>
        <input type="submit" class="btn btn-primary " name="valider" value="Charger">
    
    </form>
</body>
</html>