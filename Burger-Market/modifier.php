<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification</title>

    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <!-- Notre style CSS  -->
    <link href="css/style2.css" rel="stylesheet">

  </head>
  <body>
	<div class = "container">
		<br />
			<div class= "row">
				<div class = "col-lg-offset-4 col-lg-4 col-lg-offset-4">
					<form action = "modifier.php" method = "post" class = "well">
						<h4 class = "head">Modifier votre compte</h4>
						<div class = "form-group">
							<label for = "prenom">Prénom : </label>
							<input type = "text" name = "prenom" value = "" class = "form-control input-sm">
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
                                <label for="tel">Numéro de portable :</label>
                                <input type="number" name="tel" value="" class = "form-control  input-sm">
                        </div>
						<div class = "form-group">
							<input type = "submit" name = "submit" value = "Modifier" class = "btn btn-sm btn-primary btn-block">
                            <input type="reset" name="reset" value="Annuler" class = "btn btn-sm btn-primary btn-block">
						</div>
					</form>
				</div>
			</div>

	</div>
	<!-- Bibliothèque JavaScript jquery -->
    <script src="js/jquery.min.js"></script>

	<!--  JavaScript de Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
  </body>
  <?php

  if(isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['naissance']) && isset($_POST['tel']))
  {
      echo 'bonjour';
    //On vérifie que des valeurs ont bien été rentrées dans le formulaire
    $prenom=$_POST['prenom'];
    $prenomtaille=strlen($prenom);
    $num=$_POST['tel'];
    $numtaille=strlen($num);

    if($prenomtaille<=30)//Le nombre de caractère du prénom ne doit pas dépassé 30
    {

    if($numtaille==10)//Le nombre de caractère du numéro de téléphone doit être égal à 10
    {
        session_start();
        echo 'bonjour2';
        $bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
       $reqnom=$bdd->prepare("UPDATE inscription SET prenom=:prenom,date_naissance=:naissance,adresse_po=:adresse, tel= :tel WHERE nom=:nompersonne");
       $reqnom->execute(array('prenom'=>$_POST['prenom'],'naissance'=>$_POST['naissance'],'adresse'=>$_POST['adresse'], 'tel'=>$_POST['tel'],'nompersonne'=>$_SESSION['nom']));
        $reqnom->closecursor();
       $req = $bdd->prepare("SELECT nom, prenom,date_naissance,adresse_po,tel FROM inscription WHERE nom = :nom AND prenom= :prenom AND date_naissance=:naissance AND adresse_po= :adresse AND tel=:tel");
       $req->execute(array('nom' => $_SESSION['nom'], 'prenom' => $_POST['prenom'],'naissance'=>$_POST['naissance'], 'adresse' => $_POST['adresse'], 'tel'=>$_POST['tel']));
       $donnee=$req->fetchall();
        var_dump($donnee);

       for($i=0;$i<1;$i++)
       {
         for($j=0;$j<1;$j++)
         {
           echo "Votre compte a bien été modifié.";
           echo $donnee[$i]['prenom']." ".$donnee[$i]['date_naissance']." ".$donnee[$i]['adresse_po']." ".$donnee[$i]['tel'];
         }
       }

  }
  else {
    echo "Votre numéro de téléphone doit comprendre 10 chiffres";
  }
  }
  else {
    echo "Votre prénom est trop long.";

}
  }

  else
  {
    echo "Remplissez les champs.";
  }



  ?>
</html>
