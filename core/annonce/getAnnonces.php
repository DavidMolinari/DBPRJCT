<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 15:53
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/DBPRJCT/class/manager/userManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/DBPRJCT/class/manager/annonceManager.php';
if (file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';

$annonceManage = new annonceManager();
$annonces = $annonceManage->getAnnoncesRecruteurs();

function displayAnnonces($annonces)
{
    foreach ($annonces as $annonce) {
        echo
        '<div class="card" style="width: 18rem; margin: 1em;">
                <img class="card-img-top" src="https://picsum.photos/id/575/280/180" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title">'.utf8_encode($annonce->prenom). ' '  .utf8_encode($annonce->prenom). '</h5>
                    <p class="card-text">'.utf8_encode($annonce->abstract).'</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
                </div>';
    }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Annonces</h1>
    <!-- DataTales Example -->
    <div class="cards" style="display: flex;">

        <?php displayAnnonces($annonces) ?>
    </div>
</div>
<!-- /.container-fluid -->

