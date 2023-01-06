<?php
require_once('./php/database/db_connect.php');

// On récupère id
$id = $_GET['id'];

// requete pour sélectionner tout les produits + la catégorie
$sql = "SELECT * FROM products
LEFT JOIN category ON products.category_id = category.id
WHERE products.category_id = {$id};";
?>

<?php

// Récupérer les données des produits
$product = $requete->fetchAll(PDO::FETCH_ASSOC);

foreach($products as $product): ?>

<!-- page pour afficher la liste des produits + catégorie -->
<!-- cliquer sur le nom de la categorie permet d'afficher la liste des produits -->
<h2>Liste des produits</h2>
<article>
    <h2><?= $product['title'] ?></h2>
    <p>Auteur : <?= $product['description'] ?></p>
    <p>Auteur : <?= $product['price'] ?></p>
    <p>Auteur : <?= $product['category'] ?></p>
    <p><a href="products.php?id=<?= $category['id'] ?>"><?= $category['name'] ?></a></p>
</article>
<?php
 endforeach;











