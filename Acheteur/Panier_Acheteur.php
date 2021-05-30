<?php
    require '../BDD/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier - ECE MarketPlace</title>
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
                <a class="boutonNav" href="Notification.html"><img id="logoNotification" src="../files/logo/notification_remind.png">Notifications</a>
                <a class="boutonNav" href="PageCompte_Acheteur.html"><img id="logoPanier" src="../files/logo/iconfinder_User.png">Mon compte</a>
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
			<div id="corpPanier">
				<div id="sectionArticle">
					<?php $article = $BDD->query('SELECT * FROM article AS a, panier AS p,acheteur AS ach WHERE a.id_article=p.id_article AND p.id_acheteur=ach.id_acheteur'); ?>
					<?php foreach ($article as $key => $article): ?>
					<div id="divArticle">
						<div id="imgArticle"><img src="<?= $article->file_url ?>" alt="photoArtcile"></div>
						<div id="informationArticle">
							<div id="titreArticle"> <?= $article->titre ?></div>
							<div id="quantitArticle">Quantité : </div>
						</div>
						<div id=divAction>
							<div id="prixArticle"><?= number_format($article->prix,2,',',''); ?>€</div>
							<div id="suprimerArticle"><button><img src="../Files/logo/iconfinder_trash-bin.png" alt="poubelle"></button></div>
						</div>
					</div>
					<div id="separation"></div>
                    <?php endforeach ?>
				</div>
				
					<div id="sectionPrix">
						<table>
							<tr>
								<td id="tableauPanierDroit"><h3>Nombre d'article : </h3></td>
								<td><h3>Mettre le nombre d'article</h3></td>
							</tr>
							<tr>
								<td id="tableauPanierDroit"><h2>Prix Total : </h2></td>
								<td><h2>Bin calcul€</h2></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
	<div id="footer"></div>
	</html>