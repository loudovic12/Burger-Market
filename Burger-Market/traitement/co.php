<?php

if(isset($_POST['email']) && isset($_POST['mdp']))
{
  //On se connecte à la base de donnée projetsite
$bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
$req = $bdd->prepare("SELECT * FROM inscription WHERE email= :email AND mot_de_passe=:mdp");
$req->execute(array('email'=>$_POST['email'], 'mdp'=>$_POST['mdp']));
$donnee=$req->fetch();
var_dump($donnee);
//On effectue une requête permettant de récupérer les données correspondant à l'adresse mail et au mot de passe
if($donnee)
{
if($_POST['email'] == 'admin@admin.com' AND $_POST['mdp'] == 'admin')
    {
            setcookie('admin', $donnee['nom'], time()+3600, '/');
            header('location: ../index.php');
    }
elseif($_POST['email']==$donnee['email'] && $_POST['mdp']==$donnee['mot_de_passe'])
{
  //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
setcookie('nom', $donnee['nom'], time()+3600, '/');
session_start(); //On ouvre la session de l'utilisateur
$_SESSION['prenom'] = $donnee['prenom'];
$_SESSION['nom'] = $donnee['nom'];
$nom=$donnee['nom'];            //On associe les données récupérées pour pouvoir les afficher dans le tableau
$prenom=$donnee['prenom'];
$ville=$donnee['adresse_po'];


//Ce code sert à calculer l'âge à partir de la date de naissance qu'on a récupéré
$today = date('Y-m-d');
$d1 = new DateTime($donnee['date_naissance']);
$d2 = new DateTime($today);
$diff = $d2->diff($d1);
$age = $diff->y;
header('location: ../index.php');

}

}
else {
$message="Votre email ou votre mot de passe est incorrect.";
   //si le mot de passe ou l'email est incorrect, on renvoie l'utilisateur sur le formulaire de connexion
   header('location: connexion.php?$message');

  }



}