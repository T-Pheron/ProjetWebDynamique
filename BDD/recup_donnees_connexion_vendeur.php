<?php

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
            session_start();
            $req = $bdd->prepare('SELECT id_vendeur FROM vendeur WHERE mail = :mail AND mdp = :mdp');
            $req->execute(array(':id_vendeur'=>$id_vendeur));
            $res = $req->fetch();

            $_SESSION['id_vendeur']=$res;
            header('Location: PageAccueil_Vendeur.html');
        }
        else
        {
            header(' ../annexes/PageConnexion_Acheteur_Erreur.html');
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
