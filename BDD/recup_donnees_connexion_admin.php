<?php

 //connexion à la base de données
 try{
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','',$pdo_options);
 
  
  if(!empty($_POST['mail']) && !empty($_POST['mdp']))
  {
      $mail = $_POST['mail'];
      $mdp = $_POST['mdp'];
   
      $req = $bdd->prepare('SELECT mail, mdp FROM administrateur WHERE mail = :mail AND mdp = :mdp');
      $req->execute(array(':mail' => $mail, ':mdp' => $mdp ));
      $res = $req->fetch();
       
      
        if($mdp === $res['mdp'] AND $mail === $res['mail'])
        {
            header('Location: PageAccueil_Admin.html');
        }
        else
        {

            header('location:aboutus.php');
        }
      
   }
   else
   {
    header('Location: ../Annexes/PageAccueil_VendeurErreur.html');
        
   }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
  
 ?>
