<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Réservation</title>
	<meta charset="UTF-8">
    
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
    <link rel="stylesheet" href="css/style1.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
    
</head>
    

    
	<!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->
<body>    
    	<!-- Réservation -->
	<section id="reservation">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 about-text texte-white">
					<h1>Réservation</h1>
					<p>Réservez vos places pour confirmer si vous venez avec votre famille</p>
				</div>
				<div class="col-lg-6">
                         <div class = "container">
		<br />
			<div class="row">
				<div class = "col-lg-6">
					<form action = "reservation.php" method = "post" class = "well">
						<h4 class = "head">Réservez votre menu </h4>
						<div class = "form-group">
							<label for = "datere">Date de réservation : </label>
              <div class='col-sm-14'>
              <input type='datetime' class="form-control" id='datetimepicker4' name="datere" required/>
          </div>
          <script type="text/javascript">
              $(function () {
                  $('#datetimepicker4').datetimepicker();
              });
          </script>
					</div>
						<div class = "form-group">
							<label for = "nombre">Nombre de personnes : </label>
							<input type = "number" name = "nombre" value = "" class = "form-control input-sm" max=40 min=0 required>
						</div>
						<div class = "form-group">
							<label for = "menu">Votre menu : </label>
							<select class = "form-control  input-sm" name="menu">
                <option value="Menu 1">Menu 1</option>
                <option value="Menu 2">Menu 2</option>
                <option value="Menu 3">Menu 3</option>
                <option value="Menu 4">Menu 4</option>
              </select>
						</div>


						<div class = "form-group">
							<input type = "submit" name = "submit" value = "Réserver" class = "btn btn-sm btn-primary btn-block">
                            <input type="reset" name="reset" value="Annuler" class = "btn btn-sm btn-primary btn-block">
						</div>
					</form>
				</div>
			</div>

	</div>
	<!-- Bibliothèque JavaScript jquery -->
    <script src="bootstrap/js/jquery.min.js"></script>

	<!--  JavaScript de Bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  <?php

  if(isset($_POST['datere']) && isset($_POST['nombre']) && isset($_POST['menu'])) //On vérifie si les champs sont bien remplis
  {
    var_dump($_POST['nombre']);
    $bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
    //On se connecte à la base de donnée projetsite
    $req=$bdd->prepare("INSERT INTO reservation (nombre_personne,date_reservation,menu) VALUES(:nombre,:datere,:menu)");
    $req->execute(array( 'nombre'=>$_POST['nombre'],'datere'=>$_POST['datere'], 'menu'=>$_POST['menu']));
    //On exécute une requête sql qui va nous permettre d'importer des données dans table reservation la base de donnée projetsite
    $donnee=$req->fetchall();
    var_dump($donnee);
echo "Votre menu a bien été réservé."; //Si les données ont bien été importées, on affiche ce message
}
else {
  echo "Veuillez remplir les champs."; //Si les champs ne sont pas tous remplis, on affiche ce message d'erreur
}
    
   ?>
</html>
