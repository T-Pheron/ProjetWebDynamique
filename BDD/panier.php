<?php 
class Panier{
    public function __construct(){
        if(isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }
    public function add ($cate_id){
        $_SESSION['panier']['$cate_id']=1;
    }

}