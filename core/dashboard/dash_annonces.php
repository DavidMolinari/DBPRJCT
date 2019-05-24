<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 15:53
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/DBPRJCT/class/old_manager/userManager.php';
if (file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';
require_once '../../class/old_manager/annonceManager.php';
$annonceManage = new annonceManager();
$annonces = $annonceManage->getAnnonces();

function displayAnnonces($annonces)
{
    foreach ($annonces as $annonce) {
        echo
        '<div class="card" style="width: 18rem; margin: 1em;">
            <img class="card-img-top" src="https://picsum.photos/id/5/286/280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Annonce type '.$annonce->ID.'</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
                <a href="#" class="btn btn-success">Postuler</a>
            </div>
        </div>
';
    }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Annonces</h1>

    <div class="cards" style="display: flex;">
    <!-- DataTales Example -->
        <?php displayAnnonces($annonces); ?>
    </div>


</div>


<!-- /.container-fluid -->

