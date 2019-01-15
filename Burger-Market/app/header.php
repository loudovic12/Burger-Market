<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Burger Market</title>
	<meta charset="UTF-8">
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
    <link rel="stylesheet" href="css/style1.css"/>
    
</head>
    
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="user-panel">
                    <?php if(isset($_COOKIE['nom'])) { ?> 
                    <a href="membre.php">
                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
                    $nom = $_COOKIE['nom'];
                    $req = $bdd->prepare('SELECT * FROM inscription WHERE nom= :nom');
                    $req-> execute(array('nom'=>$nom));
                    $donnees= $req->fetch();
                    echo $donnees['nom'] .' ';
                    echo $donnees['prenom'];
                    ?></a> /
					<a href="traitement/deco.php">DECONNEXION</a>
                    <?php } elseif(isset($_COOKIE['admin'])) { ?> 
                    <a href="admin/index.php">Panel Admin</a> /
                    <a href="traitement/deco.php">Deconnexion</a>

                    <?php } else { ?>
                    
					<a href="inscription.php">Créer un compte</a> / 
					<a href="connexion.php">Se connecter</a>
                    <?php } ?>
				</div>
			</div>
		</div>
        
		<div class="header-bottom">
			<div class="container">
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Market <span class="glyphicon glyphicon-cutlery"></span></h1>
				<ul class="main-menu">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="reservation.php">Réservation</a></li>
					<li><a href="index.php#contact">Contact</a></li>
					<li><a href="index.php#plan">Plan</a></li>
				</ul>
			</div>
		</div>
    </header>
    
</html>