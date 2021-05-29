<?php
 //connexion à la base de données
 try{
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=ece_market_place_bdd','root','',$pdo_options);
 
  
  if(!empty($_POST['mail']) && !empty($_POST['mdp']))
  {
      $mail = $_POST['mail'];
      $mdp = $_POST['mdp'];
   
      $req = $bdd->prepare('SELECT mail, mdp FROM acheteur WHERE mail = :mail AND mdp = :mdp');
      $req->execute(array(':mail' => $mail_bdd, ':mdp' => $mdp_bdd ));
      $res = $req->fetch();

      echo $mail_bdd;
      echo $mdp_bdd;
       
      if($res)
      {
        if($mdp_bdd === $res['mdp'] && $mail_bdd === $res['mail'])
        {
            $message='cest oke ca a bien ete trouve mafia';
            header('Location: ../PageAcceuil.html');
        }
        else
        {
            $message='cest pas encore ca mafia';
            //header('location:aboutus.php');
        }
      }
   }
   else
   {
       //renvoi du formulaire
       echo 'Votre mail ou mot de passe est incorrect';
        
   }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
//}
  
 ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vérification</title>
</head>
<body>
    <h2>Est ce que la connexion a fonctionné ?</h2>
    <p><?php echo $message;
         echo $mail_bdd;
         echo $mdp_bdd;?></p>
</body>
</html>
