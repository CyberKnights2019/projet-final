<?PHP
include "D:/wamp64/www/projet final/Projet_integre1/core/CategorieService.php";
$categorieservice1 = new CategorieService();

if (isset($_POST["idd"])){

    $categorieservice1->supprimercategorie($_POST["idd"]);
    header('Location: affichercategorie.php');
}

?>

