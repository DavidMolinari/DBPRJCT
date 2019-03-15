<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 15:53
 */

if(file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';
if(isset($_GET['g'])){

    require_once '../../class/manager/annonceManager.php';
    $annonceManage = new annonceManager();
    $annonces = $annonceManage->getAnnonces();
}

function displayTableUsers($annonces){
    foreach($annonces as $annonce){
        echo
            "<tr>
                <td class='user_id'>".$annonce->ID."</td>
                <td class='user_date_embauche'>".$annonce->DATE_EMBAUCHE."</td>
                <td class='user_duree'>".$annonce->DUREE."</td>
                <td class='user_exp_attendue'>".$annonce->EXP_ATTENDUE."</td>
                <td class='user_id_poste'>".$annonce->ID_POSTE."</td>
                <td class='user_id_recruteur_entreprise'>".$annonce->ID_RECRUTEUR_ENTREPRISE."</td>
                <td class='user_edit'><button data-id='".$annonce->ID."' class='btn btn-success editUser'></button></td>
                <td class='user_remove'><button data-id='".$annonce->ID."' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Annonces</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Annonces</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date Embauche</th>
                        <th>Duree</th>
                        <th>exp attendue</th>
                        <th>id poste</th>
                        <th>id recruteur entreprise</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Date Embauche</th>
                        <th>Duree</th>
                        <th>exp attendue</th>
                        <th>id poste</th>
                        <th>id recruteur entreprise</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    displayTableUsers($annonces);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

