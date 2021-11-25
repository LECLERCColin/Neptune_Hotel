
<?php
 require 'headerclient.php';

?>
<?php
define('PER_PAGE', 10);
function withParam(array $data, string $param, $value): string {
    return http_build_query(array_merge($data, [$param => $value]));
  }
function withParams(array $data, array $params): string {
    return http_build_query(array_merge($data, $params));
    }
function sortir(string $sortKey, string $label, array $data): string{
    $sort = $data['sort'] ?? null;
    $direction = $data['dir'] ?? null;
    $icon = "";
    if ($sort === $sortKey) {
        $icon = $direction === 'asc' ? "^" : '\/';
    }
    $url = withParams($data, ['sort' => $sortKey, 'dir' => $direction === 'asc' && $sort === $sortKey ? 'desc' : 'asc']);
    return <<<HTML
    <a href="?$url">$label $icon</a>
HTML;
}
$query = "SELECT id_cham, avatar, capacite, exposition, douche, etage, prix  FROM tarifs, chambres WHERE id = tarif_id";
$queryCount = "SELECT COUNT(*) as total FROM chambres";
$params = [];
$sortable = ["avatar", "capacite", "exposition", "douche", "etage", "prix"];
if (!empty($_GET['q'])){
    $query .= " AND capacite LIKE :capacite";
  
    $params['capacite'] = '%' . $_GET['q'] . '%';
}

if (!empty($_GET['sort']) && in_array($_GET['sort'], $sortable)) {
    $direction = $_GET['dir'] ?? 'asc';
    if (!in_array($direction, ['asc', 'desc'])){
        $direction = 'asc';
    }
    $query .= " ORDER BY " . $_GET['sort'] . " $direction";
}






$page = (int)($_GET['p'] ?? 1);
$offset = ($page-1) * PER_PAGE;


$query .= " LIMIT " . PER_PAGE . " OFFSET $offset";

$statement = $bdd->prepare($query);
$statement->execute($params);
$chambres = $statement->fetchAll();

$statement = $bdd->prepare($queryCount);
$statement->execute($params);
$total = (int)$statement->fetch()['total'];
$pages = ceil($total / PER_PAGE);
?>

<style>
td {
  font-size: 40px;
}
#infos {
  font-size: 30px;
}
#recherche {
  width: 500px;
}

form {
  display: flex;
  flex-direction: row;

}
#boutton {
  margin-left: 25px ;

}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
</head>
<body class="p-4">
<br><br><br>
    <h1>Liste de Chambres :</h1>
    <form action="" class="mb-4 ">
        <div class="form-group">
            <input type="text" class="form-control border border-dark" name="q" placeholder="Recherche par capacité" id="recherche">
        </div>
        <button class="btn btn-primary" id="boutton">Rechercher</button>

    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Images</th>
                <th scope="col"><?= sortir('capacite', 'Capacité', $_GET)?></th>
                <th scope="col"><?= sortir('exposition', 'Exposition', $_GET)?></th>
                <th scope="col"><?= sortir('douche', 'Douche', $_GET)?></th>
                <th scope="col"><?= sortir('etage', 'Etage', $_GET)?></th>
                <th scope="col"><?= sortir('prix', 'Prix', $_GET)?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($chambres as $p): ?>



          <?php
          if($p['douche']==1){  
            $d = 'avec';
             }else{
               $d = 'sans';
             }
          ?>
            <tr>
                <td><img src="../Admin/membres/avatars/<?=$p['avatar']?>" alt="" width="500px" height="400px"></td>
                <td><?= $p['capacite']?> personnes</td>
                <td><?= $p['exposition']?></td>
                <td><?= $d?></td>
                <td><?= $p['etage']?></td>
                <td><?= $p['prix']?>€</td>
                <td><a href="infochambre.php?type=<?= $p['id_cham'] ?>" class="btn btn-sm btn-outline-secondary py-2" id="infos">+infos</a></td>
                <td><a href="#" class="btn btn-sm btn-outline-secondary py-2" id="infos">reserver</a></td>
                

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php if ($pages > 1 && $page > 1):?>
        <a href="?<?= withParam($_GET, "p", $page - 1) ?>" class="btn btn-primary">Page précédente</a>
    <?php endif ?>
    <?php if ($pages > 1 && $page < $pages):?>
        <a href="?<?= withParam($_GET, "p", $page + 1) ?>" class="btn btn-primary">Page suivante</a>
    <?php endif ?>
    
</body>
</html>

<?php
    require '../components/footer.php';
    ?>