<!--Le PHP et jQuery permettent de donner des fonctionnalités aux boutons, aux entrées de nos pages web. Ils permettent de générer des messages ou des actions (passage d'une page à une autre) afin de lier les éléments, pages de notre site.-->
<?php
require 'bdd.php';
require 'panier.php';
$BDD = new BDD();
$panier = new panier($BDD);

$json = array('error' => true);

if(isset($_GET['id_article'])) {
    $cate = $DB->query('SELECT id_article FROM article WHERE id_article=:id_article', array('id_article' => $_GET['id_article']));
    if(empty($cate)) {
        $json['message'] = "Ce produit n'existe pas";
    }
    $panier->ajouter($catet[0]->id_article);
    $json['error'] = false;
    $json['message'] = 'Le produit a bien été ajouté à votre panier';
}
else {
    $json['message'] = "Vous n'avez pas sélectionné de produit à ajouter";
}
echo json_encode($json);
?>