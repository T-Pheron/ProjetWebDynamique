<?php
var_dump($_FILES);
var_dump($_POST);
//Ouverture d'une connexion à la bdd
try{
    $objetPdo = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','');
}catch(PDOException $e){
    die('Erreur: echec de la connexion à la base de données');
}

//préparation de la requete d'insertion 
$pdoStat = $objetPdo->prepare('INSERT INTO article( titre, categorie, prix, description) VALUES (:titre, :categorie, :prix, :description)');
if(!empty($_POST['titre'])AND !empty($_POST['categorie'])){
    $file_name= $_FILES['fichier']['name'];
    $file_tmp_name= $_FILES['fichier']['tmp_name'];
    $file_dest ='../../Files/img/imgProduits/'.$file_name;
    echo 'salut';
}


echo $file_name;
echo $file_tmp_name;
echo $file_dest;
if(!empty($_POST['titre'])AND !empty($_POST['categorie']) AND !empty($_POST['prix']) AND !empty($_POST['description'])){
    //on lie chaque marque à une valeur
    $pdoStat->bindValue('titre',$_POST['titre'], PDO::PARAM_STR);
    $pdoStat->bindValue('categorie',$_POST['categorie'], PDO::PARAM_STR);
    $pdoStat->bindValue('prix',$_POST['prix'], PDO::PARAM_STR);
    $pdoStat->bindValue('description',$_POST['description'], PDO::PARAM_STR);
    echo'salut';
}

if(move_uploaded_file($file_name,$file_dest)){
    echo 'fichier bien envoyé bg';
    //excecution de la requete preparee
    $insertIsOk = $pdoStat->execute();

    if($insertIsOk==1){
        //header('Location: ../PageAccueil.html');
        echo 'bien joue ca';
    }
    else {
        //header('Location: ../annexes/ErreurInscription.html');
        echo 'ay chaud';

    }
}else{
    echo " ah mon gars c'est chaud";
}

?>

