<?php
session_start();
session_unset();
session_destroy();
setcookie('nom', $donnee['nom'], time()-1, '/');
setcookie('admin', $donnee['nom'], time()-1, '/');

header('location: ../index.php');

 ?>
