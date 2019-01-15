<?php

  if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['naissance']) && isset($_POST['tel']))
  {
$prenom=$_POST['prenom'];
$prenomtaille=strlen($prenom);
$nom=$_POST['nom'];
$nomtaille=strlen($nom);
$num=$_POST['tel'];
$numtaille=strlen($num);
$mail=$_POST['email'];
$modp=$_POST['mdp'];

if($nomtaille<=30)
{
  if($prenomtaille<=30)
  {

  if($numtaille==10)
  {
    if(strspn(strtolower($mail), "@") < strlen($mail))
    {
      if(strspn(strtolower($modp), "ab0123456789") < strlen($modp))
      {
  $bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
  $requete = $bdd->query("SELECT * FROM inscription WHERE email = '".$_POST['email']."'");

  $r=$requete->fetch();

  if($r==false)
  {
    $req=$bdd->prepare("INSERT INTO inscription (nom,prenom,date_naissance,adresse_po,email,tel,mot_de_passe) VALUES(:nom,:prenom,:naissance,:adresse,:email,:tel,:mdp)");
    $req->execute(array('nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'naissance'=>$_POST['naissance'], 'adresse'=>$_POST['adresse'], 'email'=>$_POST['email'],'tel'=>$_POST['tel'],'mdp'=>$_POST['mdp']));
echo "Votre compte a bien été créé";
      header('location: ../connexion.php');
  }

  else {
    echo "Ce compte existe déjà.";
  }
}
else {
  echo "Votre mot de passe doit contenir au moins une lettre et un chiffre.";
}
}

else {
  echo "Votre adresse email doit contenir '@'. ";
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
  else {
    echo "Votre nom est trop long.";
  }
}
   ?>
