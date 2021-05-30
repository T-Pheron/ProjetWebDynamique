<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=ece_market_place_bdd','root','');
}catch(PDOException $e){
    die('Impossible de se connceter à la base de donnees');
}


$req = $bdd->prepare('SELECT * FROM article');
$req->execute();
var_dump($req->fetchAll(PDO::FETCH_OBJ));

?>
