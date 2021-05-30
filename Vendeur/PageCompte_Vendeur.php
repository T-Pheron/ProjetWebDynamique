<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECE MarketPlace</title>
	 <!--Header avec notamment les références des pages liées à la page actuelle-->
    <link rel="stylesheet" type="text/css" href="../CSS/style_css_base.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_page_vendeur.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../JS/scripte_menu_vertical.js" async></script>
    <script> 
	 /*Fonction qui permet de mettre les informations du footer et du menu vertical dans un fichier afin de récupérer et d'afficher ces informations ultérieurement*/
        $(function(){
            $("#footer").load("../FilesStruc/footer.html");
            $("#menuVertical").load("../FilesStruc/menuVertical.html"); 
        });
    </script>


    <div id="enTete">
        <div id="topEntete">
			  <!--On insère le logo qui permet de revenir à la page principale -->
            <a href="../PageAccueil_Vendeur.html"><img id="logoAccueil" src="../files/logo/ECEMarket_base.png"></a>
            <div id="barreDeRecherche">
                <table>
                    <tr>
                        <td>
                            <h4>Rechercher</h4>
                        </td>
						   <!--On insère la barre de recherche-->
                        <td>
                            <input type="search" id="barreRecherche" name="barreRecherche">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
          <!--On insère les boutons d'accès aux catégories d'articles, notifications et ajouter-->
        <div id="divBarreEntete">
            <div id="boutonMenu">
                <button id="boutonMenuB">Catégories</button>
            </div>
            <div id="barreEntete">
                <a class="boutonNav" href="TrucpourAllerAuNotif"><img id="logoNotification" src="../files/logo/notification_remind.png">Notifications</a>
                <a class="boutonNav" href="../Vendeur/AjoutArticle.html"><img id="logoAjouter" src="../files/logo/iconfinder_add_article.png">Ajouter</a>
            </div>
        </div>
        
        
    </div>
</head>

<body>
	<div id="teteBody"></div>
	<div id="corpBody">
		<div id="menuVertical"></div>
		<div id="corpSite">
			<div id="banderoleTitre"><h2>Mon compte</h2></div>
			<div id="divInformation">
				<div id="sectionInformation">
					<div id="mesInformations">
						<h3>Mes informations :</h3>
					</div>
					<div id="sectionInformation1">
						<div id="pp">PP</div>
						<div id="informationsPersonnels">
							<!--Affichage des informations du vendeur obtenues à la suite de la création de son compte (nom, prénom, pseudo, e-mail)-->
							<table>
								<tr>
									<td id="tableauDroit">Nom : </td>
									<td><?=$_SESSION['nom'] ?></td>
								</tr>
								<tr>
									<td id="tableauDroit">Prénom : </td>
									<td><?=$_SESSION['prenom'] ?></td>
								</tr>
								<tr>
									<td id="tableauDroit">Pseudo : </td>
									<td><?=$_SESSION['pseudo'] ?></td>
								</tr>
								<tr>
									<td id="tableauDroit">Email : </td>
									<td><?=$_SESSION['mail'] ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="mesInformations1">
						<h3>Mes informations confidentielles et design</h3>
					</div>
					<div id="sectionInformation2">
						<!--Affichage des infos confidentielles du vendeur(mot de passe et photos)-->
						<table>
							<tr>
								<td id="tableauDroit2">Mon mot de passe : </td>
								<td>
									<div id="boutonAction">
										<a href="">Modifier</a>
									</div>
								</td>
							</tr>
							<tr>
								<td id="tableauDroit2">Ma photo profil : </td>
								<td>
									<!--Bouton de modification-->
									<div id="boutonAction">
										<a href="">Modifier</a>
									</div>
								</td>
							</tr>
							<tr>
								<td id="tableauDroit2">Ma photo d'arrière plan : </td>
								<td>
									<!--Bouton de modification-->
									<div id="boutonAction">
										<a href="">Modifier</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<div id="footer"></div>
</html>