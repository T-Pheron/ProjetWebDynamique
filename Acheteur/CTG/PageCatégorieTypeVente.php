<?php
    require '../../BDD/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECE MarketPlace</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/style_css_base.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/style_page_article.css">
    <script> 
        $(function(){
            $("#footer").load("../../FilesStruc/footer.html");
            $("#menuVertical").load("../../FilesStruc/menuVertical.html"); 
        });
    </script>
    

    <div id="enTete">
        <div id="topEntete">
            <a href="../../PageAccueil.html"><img id="logoAccueil" src="../../files/logo/ECEMarket_base.png"></a>
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
                <a>Catégorie</a>
            </div>
            <div id="barreEntete">
                <a class="boutonNav" href="../../TrucpourAllerAuNotif"><img id="logoNotification" src="../../files/logo/notification_remind.png">Notifications</a>
                <a class="boutonNav" href="../../Acheteur/PageCompte.html"><img id="logoCompte" src="../../files/logo/iconfinder_User.png">Mon compte</a>
                <a class="boutonNav" href="../../TrucpourAllerAuPanier"><img id="logoPanier" src="../../files/logo/iconfinder_cart.png">Panier</a>
            </div>
        </div>
        
        
    </div>
</head>

<body>
    <div id="teteBody"></div>
    <div id="corpBody">
        <div id="menuVertical"></div>
        
        <div id="corpSite">
        	<div id="divTitreCategorie">
        		<h2 id="titreCategorie">Catégorie :<?= $_GET['categorie']; ?></Br></h2>
        		<h2 id="titreCategorie">Type de vente :<?= $_GET['typeVente']; ?></h2>

        	</div>
        	<div id="corpsArticles">
                <?php $categorie = $BDD->query('SELECT * FROM article WHERE categorie=$_GET["categorie"] AND type_de_vente=$_GET["typeVente"]');?>  
                <?php foreach ( $categorie as $cate):?>
                    <div class="divArticle">
        			<div id="photoArticle"> <a><img src='../../Files/img/photoParDefaut.jpeg'><?= $cate->photo_principal; ?></img></a></div>
        			<div id="informationsArticle">
        				<div id="titreArticle"><a><?= $cate->titre; ?></a></div>
        				<div id="description"><?= $cate->description; ?></div>
        			</div>
        			<div id="validationArticle">
        				<div id="divPrix"><?= number_format ($cate->prix,2,',',' '); ?> €</div>
        				<div id="divPanier">
        					<a class="add" href="addpanier.php?=id=<?= $cate->id_article;?>">
        						<img src="../../Files/logo/iconfinder_shopping_cart_add.png" alt="Panier">
        					</a>
        				</div>
        			</div>
        		</div>
                <?php endforeach ?>
        	</div>
        </div>
    </div>
</body>
<div id="footer"></div>
</html>
