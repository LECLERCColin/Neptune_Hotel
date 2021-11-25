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
$query = "SELECT id_res, chambre_id, jour, acompte, paye, nom, prenom  FROM clients, planning WHERE id = client_id";
$queryCount = "SELECT COUNT(id_res) as total FROM planning";
$params = [];
$sortable = ["id_res", "chambre_id", "jour", "nom", "prenom", "acompte", "paye"];
if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
       $supprime = (int) $_GET['supprime'];
       $req = $bdd->prepare('DELETE FROM planning WHERE id_res = ?');
       $req->execute(array($supprime));
    }
 } 
if (!empty($_GET['q'])){
    $query .= " AND nom LIKE :nom";
  
    $params['nom'] = '%' . $_GET['q'] . '%';
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
$planning = $statement->fetchAll();

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
    <h1>Liste de Réservations :</h1>
    <form action="" class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" name="q" placeholder="Recherche par Nom">
        </div>
        <button class="btn btn-primary">Rechercher</button>
        <h2>Ajouter une nouvelle réservation :</h2>
        <a href="AjoutRes.php" class="btn btn-dark">Ajouter</a>

    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= sortir('id_res', 'ID', $_GET)?></th>
                <th scope="col"><?= sortir('chambre_id', 'N°Chambre', $_GET)?></th>
                <th scope="col"><?= sortir('jour', 'Jour', $_GET)?></th>
                <th scope="col"><?= sortir('acompte', 'Acompte 1 oui / 0 non', $_GET)?></th>
                <th scope="col"><?= sortir('paye', 'Payé 1 oui/ 0 non', $_GET)?></th>
                <th scope="col"><?= sortir('nom', 'Nom', $_GET)?></th>
                <th scope="col"><?= sortir('prenom', 'Prénom', $_GET)?></th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($planning as $p): ?>
            <tr>
                <td><?= $p['id_res']?></td>
                <td><?= $p['chambre_id']?></td>
                <td><?= $p['jour']?></td>
                <td><?= $p['acompte']?></td>
                <td><?= $p['paye']?></td>
                <td><?= $p['nom']?></td>
                <td><?= $p['prenom']?></td>
                <td><a href="modifres.php?id_res=<?= $p['id_res'] ?>">Modifier</a></td>
                <td><a href="Administrationres.php?type=membre&supprime=<?= $p['id_res'] ?>">Supprimer</a></td>
                

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