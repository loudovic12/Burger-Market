<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
    
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
	<link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/style1.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
</head>
    
    <!-- Menu Début -->
    <?php include ("app/header.php")?>
    <!-- Menu Fin -->
  <body>
	<div class = "container">
		<br />
			<div class="row">
				<div class = "col-lg-offset-4 col-lg-4 col-lg-offset-4">
					<form action = "traitement/ins.php" method = "post" class = "well">
						<h4 class = "head">Créer votre compte gratuitement</h4>
						<div class = "form-group">
							<label for = "nom">Nom : </label>
							<input type = "text" name = "nom" value = "" class = "form-control input-sm">
						</div>
						<div class = "form-group">
							<label for = "prenom">Prénom : </label>
							<input type = "text" name = "prenom" value = "" class = "form-control input-sm">
						</div>
						<div class = "form-group">
							<label for = "password">Mot de passe : </label>
							<input type = "password" name = "mdp" value = "" class = "form-control  input-sm">
						</div>
                        <div class = "form-group">
                            <label for="naissance">Date de naissance :</label>
                            <input type="date" name="naissance" value = "" class = "form-control  input-sm">
                        </div>
                        <div class = "form-group">
                            <label for="adresse">Adresse postale</label>
                            <input type="text" name="adresse" value="" class = "form-control  input-sm">
                        </div>
                        <div class = "form-group">
                            <label for="email">Adresse mail :</label>
                            <input type="text" name="email" value="" class = "form-control  input-sm">
                        </div>
                        <div class = "form-group">
                                <label for="tel">Numéro de portable :</label>
                                <input type="number" name="tel" value="" class = "form-control  input-sm">
                        </div>
						<div class = "form-group">
							<input type = "submit" name = "submit" value = "S'inscrire" class = "btn btn-sm btn-primary btn-block">
                            <input type="reset" name="reset" value="Annuler" class = "btn btn-sm btn-primary btn-block">
						</div>
					</form>
				</div>
			</div>

	</div>
      
    <!-- Footer Début -->	
    <?php include "app/footer.php"?>
    <!-- Footer Fin -->
      
	<!-- Bibliothèque JavaScript jquery -->
    <script src="bootstrap/js/jquery.min.js"></script>

	<!--  JavaScript de Bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>
