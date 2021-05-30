<?php
//Ouverture d'une connexion à la bdd
try{
    $objetPdo = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','');
}catch(PDOException $e){
    die('Erreur: echec de la connexion à la base de données');
}
var_dump($_FILES);
var_dump($_POST);

$pdoStat = $objetPdo->prepare('INSERT INTO article(  titre, categorie, prix, description1, file_name1 , file_url ) VALUES (:titre, :categorie, :prix, :description1, :$file_name1 ,: $file_dest)');
//on lie chaque marque à une valeur
$pdoStat->bindValue('titre',$_POST['titre'], PDO::PARAM_STR);
$pdoStat->bindValue('categorie',$_POST['categorie'], PDO::PARAM_STR);
$pdoStat->bindValue('prix',$_POST['prix'], PDO::PARAM_STR);
$pdoStat->bindValue('description1',$_POST['description'], PDO::PARAM_STR);
echo'salut<br/>';
//excecution de la requete preparee
$insertIsOk = $pdoStat->execute();
if($insertIsOk==1){
    //header('Location: ../PageAccueil.html');
    echo 'bien joue ca <br/>';
}
else {
    //header('Location: ../annexes/ErreurInscription.html');
    echo 'ay chaud <br/>';
}



if(!empty($_FILES)){
    $file_name1 = $_FILES['fichier']['name'];
    $file_extension = strrchr($file_name1,".");

    echo 'Extention :'.$file_extension.'<br/>';
    echo 'nom du fichier :'.$file_name1.'<br/>';

    $file_tmp_name = $_FILES['fichier']['tmp_name']; 
    $file_dest = 'img/'.$file_name1;

    echo $file_dest;

    $extentions_autorisees = array('.jpeg','.JPEG','.PNG','.png');

    if(in_array($file_extension, $extentions_autorisees)){
        if(move_uploaded_file($file_tmp_name,$file_dest)){
            
            echo 'Fichier envoyé avec succes <br/>';
           
        } else{
            echo "Une erreur est survenu lors de l'envoi du fichier";
        }
    }else{
    echo ' Seuls les fichiers JPEG sont autorisés';
    }
}

