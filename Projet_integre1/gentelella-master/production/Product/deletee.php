<?PHP
include "D:/wamp64/www/projet final/Projet_integre1/core/ProduitService.php";
$produitservice1 = new ProduitService();

if (isset($_POST["idd"])){

    $produitservice1->supprimerproduit($_POST["idd"]);
    header('Location: afficherproduit.php');
}

?>
