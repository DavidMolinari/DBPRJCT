<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 16:43
 */


if(file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';
if(isset($_GET['g'])){

    require_once '../../class/old_manager/posteManager.php';
    $posteManager = new posteManager();
    $postes = $posteManager->getPostes();
}

function displayTableUsers($posteManager){
    foreach($posteManager as $postes){
        echo
            "<tr>
                <td class='user_id'>".$postes->ID."</td>
                <td class='user_type'>".$postes->TYPE."</td>
                <td class='user_nom'>".$postes->NOM."</td>
                <td class='user_edit'><button data-id='".$postes->ID."' class='btn btn-success editUser'></button></td>
                <td class='user_remove'><button data-id='".$postes->ID."' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Poste</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Poste</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    displayTableUsers($postes);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

