<?PHP
include_once "D:/wamp64/www/projet final/Projet_integre1/core/reclamationC.php";
$reclamationservice1 = new reclamationC();

if (isset($_POST["idd"])){

    $reclamationservice1->supprimerreclamation($_POST["idd"]);
    header('Location: afficherreclamation.php');
}

?>

