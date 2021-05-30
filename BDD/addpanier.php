<?php
    require 'header.php';
    if(isset($_GET['id'])){
        $cate = $BDD->query("SELECT id_article FROM article WHERE id_article = :id_article",array('id_article'=>$_GET['id_article']));
        if(empty($cate)){
            die('le produit nexiste pas');
        }
        $panier->add([$cate[0]->id_article);
        die('le produit a bien ete ajouter au panier <a href="javascript:history:back()">retourner à la page daccueil</a>');
    }else{
        die('ya pas darticle qui a ete ajouter au panier');
    }
    
?>