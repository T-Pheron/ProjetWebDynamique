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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../../JS/scripte_menu_vertical.js" async></script>  
    <script> 
        $(function(){
            $("#footer").load("../../FilesStruc/footer.html");
            $("#menuVertical").load("../../FilesStruc/menuVertical.html"); 
        });
    </script>
    <style type="text/css">
        #banderoleBouton{
            display: flex;
            padding: 10px;
            background-color:rgb(245, 68, 68) ;
            color:white;
            padding-left:40px;
        }        
        #boutonTrier{
            margin-left: 40px;
            min-width: 40px;
            min-width: 10px;
            background-color: white;
            border-radius:5px;
            padding: 5px;
            padding-left:10px;
            padding-right:10px;
        }

        #boutonTrier a{
            text-decoration: none;
            color: black;
        }
    </style>
    

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
                <button id="boutonMenuB">Catégories</button>
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
        		<h2 id="titreCategorie">Catégorie : <?= $_GET['categorie']; ?></h2>
        	</div>
        	<div id="banderoleBouton">
                Trier par : 
                <div id="boutonTrier">
                    <a href="../../Acheteur/CTG/PageCatégorie.php?type_2_vente=I&categorie=<?= $_GET['categorie']; ?>">Vente Immédiate</a>
                </div>
                <div id="boutonTrier">
                    <a href="../../Acheteur/CTG/PageCatégorie.php?type_2_vente=E&categorie=<?= $_GET['categorie']; ?>">Enchère</a>
                </div>
                <div id="boutonTrier">
                    <a href="../../Acheteur/CTG/PageCatégorie.php?type_2_vente=T&categorie=<?= $_GET['categorie']; ?>">Transaction</a>
                </div>
            </div>
        	<div id="corpsArticles">
                <?php $actegorieC=$_GET['categorie'];
                    $categorie = $BDD->query("SELECT * FROM article WHERE categorie='$categorieC' ");
                    foreach ( $categorie as $cate):?>
                    <div class="divArticle">
        			<div id="photoArticle"> <a><img src='../../Files/img/photoArticleParDefaut.jpeg'><?= $cate->photo_principal; ?></img></a></div>
        			<div id="informationsArticle">
        				<div id="titreArcrticle"><a><?= $cate->titre; ?></a></div>
        				<div id="description"><?= $cate->desiption; ?></div>
        				<div id="divTypeDeVente"><a>Type de vente : <?=$cate->type_de_vente; ?></a>    </div>
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


