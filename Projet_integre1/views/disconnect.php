<?php
session_start();
include "D:/wamp64/www/projet final/Projet_integre1/core/panierC.php";

unset($_SESSION['pseudo']);
$p= new PanierC();
$p->supprimerPanierTout();
header("Location: index.php");
echo $_SESSION['pseudo'];
 ?>
