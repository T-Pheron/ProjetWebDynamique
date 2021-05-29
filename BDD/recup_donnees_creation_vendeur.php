<?php
var_dump($_POST);

//Ouverture d'une connexion à la bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','');

//préparation de la requete d'insertion 
$pdoStat = $objetPdo->prepare('INSERT INTO vendeur(nom, prenom, pseudo, mail, mdp ) VALUES (:nom, :prenom, :pseudo, :mail, :mdp ,: )');

//on lie chaque marque à une valeur
$pdoStat->bindValue('nom',$_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue('prenom',$_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue('pseudo',$_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue('mail',$_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue('mdp',$_POST['mdp'], PDO::PARAM_STR);

//excecution de la requete preparee
$insertIsOk = $pdoStat->execute();


if($insertIsOk==1){
    $message='Le formulaire est bien dans la bdd';
    //header('Location: ../PageAccueil_Vendeur.html');
}
else {
    $message='Echec de l\insertion';
    //header('Location: ../PageAccueil_Vendeur_Erreur.html');
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Est ce que l'insertion dans la bdd a fonctionné ?</h2>
    <p><?php echo $message ?></p>
</body>
</html>
