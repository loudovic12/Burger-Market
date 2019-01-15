<?php
if(isset($_POST['nom']))
{
$bdd = new PDO('mysql:host=localhost;dbname=projetsite;charset=utf8', 'root', '');
session_start();
$_SESSION['nom']=$_POST['nom'];
$nompersonne=$_POST['nom'];
echo $_POST['nom'];
$req=$bdd->query("SELECT * FROM inscription WHERE nom = '$nompersonne'");
$donnee=$req->fetchall();
var_dump($donnee);
header('location: modifier.php');
echo $nompersonne;
$req->closeCursor();
}
else {
  header('location: modification.html');

    echo "Remplissez le champs.";

}
 ?>
