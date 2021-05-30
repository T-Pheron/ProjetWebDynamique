<?php 

class panier {

    private $BDD;

    public function __construct($BDD) {
        if(!isset($_SESSION)) {
            session_start();
        }
        if(!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
        $this->BDD = $BDD;
        if(isset($_POST['panier'])) {
            $this ->recalc();
        }
    }

    public function recalc() {
        foreach($_SESSION['panier'] as $produit_id_article => $quantite) {
            if(isset($_POST['panier']['quantite'][$produit_id_article])) {
                $_SESSION['panier'] = $_POST['panier']['quantite'];
            }
        }
    }

    public function count() {
        return array_sum($_SESSION['panier']);
    }

    public function total() {
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)) {
            $produit = array();
        }
        else {
            $produit = $this->BDD->query('SELECT id_article, prix FROM article WHERE id_article IN ('.implode(',',$ids).')');
        }
        foreach ($produit as $produit) {
            $total += $produit->Prix * $_SESSION['panier'][$produit->id_article];
        }
        return $total;
    }

    public function ajouter($produit_id_article) {
        if(isset($_SESSION['panier'][$produit_id_article])) {
            $_SESSION['panier'][$produit_id_article]++;
        }
        else {
            $_SESSION['panier'][$produit_id_article]=1;
        }
    }

    public function del($produit_id_article) {
        unset($_SESSION['panier'][$produit_id_article]);
    }


}