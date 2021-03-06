<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon compte - ECE MarketPlace</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style_css_base.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_page_acheteur.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../JS/scripte_menu_vertical.js" async></script>
    <script> 
        $(function(){
            $("#footer").load("../FilesStruc/footer.html");
            $("#menuVertical").load("../FilesStruc/menuVertical.html"); 
        });
    </script>


    <div id="enTete">
        <div id="topEntete">
            <a href="../PageAccueil_Acheteur.html"><img id="logoAccueil" src="../files/logo/ECEMarket_base.png"></a>
            <div id="barreDeRecherche">
                <table>
                    <tr>
                        <td>
                            <h4>Rechercher</h4>
                        </td>
                        <td>
                            <input type="search" id="barreRecherche" name="barreRecherche">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div id="divBarreEntete">
            <div id="boutonMenu">
                <button id="boutonMenuB">Catégories</button>
            </div>
            <div id="barreEntete">
                <a class="boutonNav" href="Notification.html"><img id="logoNotification" src="../Files/logo/notification_remind.png">Notifications</a>
                <a class="boutonNav" href="Panier_Acheteur.html"><img id="logoPanier" src="../Files/logo/iconfinder_cart.png">Panier</a>
            </div>
        </div>
    </div>
</head>

<body>
	<div id="teteBody"></div>
	<div id="corpBody">
		<div id="menuVertical"></div>
		<div id="corpSite1">
			<div id="banderoleTitreCompte"><h2>Mon compte</h2></div>
			<div id="divInformation">
				<div id="sectionInformation">
					<div id="mesInformations">
						<h3>Mes informations :</h3>
					</div>
					<div id="sectionInformation1">
						<div id="pp"><img src="../Files/img/photoProfilParDefaut.jpeg"></div>
						<div id="informationsPersonnels">
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
									<div id="boutonAction">
										<a href="">Modifier</a>
									</div>
								</td>
							</tr>
							<tr>
								<td id="tableauDroit2">Ma photo d'arrière plan : </td>
								<td>
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