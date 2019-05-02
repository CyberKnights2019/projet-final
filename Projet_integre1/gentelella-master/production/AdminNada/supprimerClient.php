
<?php
include "d:/wamp64/www/projet final/projet_integre1//core/clientC.php";
$clientC=new clientC();
if(isset($_POST['supprimer']))
{
if (isset($_POST['pseudo']))
{
	$clientC->supprimerClient($_POST['pseudo'],$clientC->conn);
	header('Location: afficherClient.php');
}
}
else
{echo "err";}

?>
