<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
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
    <?php include "app/header.php"?>
    <!-- Menu Fin -->

  <body>
	<div class = "container">
		<br />
			<div class="row">
				<div class = "col-lg-offset-4 col-lg-4 col-lg-offset-4">
					<form action = "traitement/co.php" method = "post" class = "well">
						<h4 class = "head">Connexion à votre compte</h4>
                       <div class = "form-group">
                            <label for="email">Adresse mail :</label>
                            <input type="text" name="email" value="" class = "form-control  input-sm" required>
                        </div>
						<div class = "form-group">
							<label for = "password">Mot de passe : </label>
							<input type = "password" name = "mdp" value = "" class = "form-control  input-sm" required>
            
						</div>
						<div class = "form-group">
							<input type = "submit" name = "submit" value = "Valider" class = "btn btn-sm btn-primary btn-block"> <br>
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
