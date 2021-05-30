<?php
class BDD{
    private $host = 'localhost';
    private $username = 'root';
    private $mdp = '';
    private $bdd = 'ece_market_place_bdd';
    private $bd;


    public function __construct( $host = NULL,$username = NULL,$mdp = NULL,$bdd = NULL){
        if($host != NULL){
            $this->host = $host;
            $this->username = $username;
            $this->mdp = $mdp;
            $this->bdd = $bdd;
        }

        try{
            $this->bd = new PDO('mysql:host='.$this->host.';dbname='.$this->bdd, $this->username, $this->mdp,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch(PDOException $e){
            die("<h1>Impossible de se connecter a la base de donnees</h1>");
        }

        
    }

    public function query($sql, $data = array()){
        $req = $this->bd->prepare($sql);
        $req->execute($data);
        return ($req->fetchAll(PDO::FETCH_OBJ));
    }

}
