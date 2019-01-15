?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">


 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!--- Include the above in your HEAD tag ---------->

 <link href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
 <script src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
 </head>
 <body>
	<!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->

    <!-- Contenu -->
    <?php
    if(isset($_COOKIE['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
    $nom = $_COOKIE['nom'];
    $req = $bdd->prepare('SELECT * FROM inscription WHERE nom= :nom');
    $req-> execute(array('nom'=>$nom));
    $donnee= $req->fetch(); ?>
    <div class="container">
        <div class="offset-2 col-md-8">
            <h4>Espace Membre</h4>
            <h5>Bienvenue <?php echo $donnee['nom'].' '.$donnee['prenom'] ?></h5>
            <p>Email : <?php echo $donnee['email'] ?></p>
            <p>Date de naissance : <?php echo $donnee['date_naissance'] ?></p>
            <p>Ville : <?php echo $donnee['adresse_po'] ?></p>
            <p>Numéro de téléphone : <?php echo $donnee['tel'] ?></p>
            <input type="button" value="Modifier son profil" class="btn btn-primary" onClick="javascript:document.location.href='modifier.php'">
        </div><br>
    </div>
    <?php }
        elseif(isset($_COOKIE['admin'])) {
            header('location: admin');
        }
    else {
        header('location: connexion.php');
    } ?>

 </body>
 </html>
