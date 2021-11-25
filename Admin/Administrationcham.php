<?php require 'headeradmin.php'; ?>
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
$query = "SELECT id_cham, capacite, exposition, douche, etage, prix  FROM tarifs, chambres WHERE id = tarif_id";
$queryCount = "SELECT COUNT(id_cham) as total FROM chambres";
$params = [];
$sortable = ["id_cham", "capacite", "exposition", "douche", "etage", "prix"];
if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
       $supprime = (int) $_GET['supprime'];
       $req = $bdd->prepare('DELETE FROM chambres WHERE id_cham = ?');
       $req->execute(array($supprime));
    }
 } 
if (!empty($_GET['q'])){
    $query .= " AND id_cham LIKE :id_cham";
  
    $params['id_cham'] = '%' . $_GET['q'] . '%';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="p-4">
<br><br><br>
    <h1>Liste de Chambres :</h1>
    <form action="" class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" name="q" placeholder="Recherche par N°">
        </div>
        <button class="btn btn-primary">Rechercher</button>
        <h2>Ajouter une nouvelle chambre :</h2>
        <a href="AjoutCham.php" class="btn btn-dark">Ajouter</a>

    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= sortir('id_cham', 'ID', $_GET)?></th>
                <th scope="col"><?= sortir('capacite', 'Capacité', $_GET)?></th>
                <th scope="col"><?= sortir('exposition', 'Exposition', $_GET)?></th>
                <th scope="col"><?= sortir('douche', 'Douche', $_GET)?></th>
                <th scope="col"><?= sortir('etage', 'Etage', $_GET)?></th>
                <th scope="col"><?= sortir('prix', 'Prix', $_GET)?></th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($chambres as $p): ?>
            <tr>
                <td><?= $p['id_cham']?></td>
                <td><?= $p['capacite']?></td>
                <td><?= $p['exposition']?></td>
                <td><?= $p['douche']?></td>
                <td><?= $p['etage']?></td>
                <td><?= $p['prix']?></td>
            
                <td><a href="modifcham.php?id_cham=<?= $p['id_cham'] ?>">Modifier</a></td>
                <td><a href="Administrationcham.php?type=membre&supprime=<?= $p['id_cham'] ?>">Supprimer</a></td>
                

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
</html