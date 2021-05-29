<?php
var_dump($_POST);
 //connexion à la base de données
 try{
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','',$pdo_options);
 
  
  if(!empty($_POST['mail']) && !empty($_POST['mdp']))
  {
      $mail = $_POST['mail'];
      $mdp = $_POST['mdp'];
   
      $req = $bdd->prepare('SELECT mail, mdp FROM vendeur WHERE mail = :mail AND mdp = :mdp');
      $req->execute(array(':mail' => $mail, ':mdp' => $mdp ));
      $res = $req->fetch();
       
      
        if($mdp === $res['mdp'] AND $mail === $res['mail'])
        {
            echo 'c est bon normalement';
            //header('Location: PageAccueil_Vendeur.html');
        }
        else
        {
            echo 'ya un truc qui cloche';
            //header('location:aboutus.php');
        }
      
   }
   else
   {
       //renvoi du formulaire
       echo 'Le mail ou mot de passe est incorrect';
        
   }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
  
 ?>
