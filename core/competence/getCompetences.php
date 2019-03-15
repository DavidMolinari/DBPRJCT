<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 16:13
 */

if(file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';
if(isset($_GET['g'])){

    require_once '../../class/manager/competenceManager.php';
    $competencesManager = new competenceEtudiant();
    $competences = $competencesManager->getIdCompetence();
}

function displayTableUsers($competences){
    foreach($competences as $competence){
        echo
            "<tr>
                <td class='user_id'>".$competence->ID."</td>
                <td class='user_nom'>".$competence->NOM."</td>
                <td class='user_edit'><button data-id='".$competence->ID."' class='btn btn-success editUser'></button></td>
                <td class='user_remove'><button data-id='".$competence->ID."' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Competence</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Competence</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    displayTableUsers($competences);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

