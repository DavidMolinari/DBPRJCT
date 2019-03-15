<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 14:25
 */

if(file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';

if(isset($_GET['g'])){

    require_once '../../class/manager/etudiantManager.php';
    $etudiantManager = new etudiantManager();
    $etudiants = $etudiantManager->getEtudiants();
}

function displayTableUsers($etudiants){
    foreach($etudiants as $etudiant){
        echo
            "<tr>
                <td class='user_id'>".$etudiant->ID."</td>
                <td class='user_login'>".$etudiant->prenom."</td>
                <td class='user_password'>".$etudiant->nom."</td>
                <td class='user_adresse'>".$etudiant->adresse."</td>
                <td class='user_ville'>".$etudiant->ville."</td>
                <td class='user_region'>".$etudiant->region."</td>
                <td class='user_mobile'>".$etudiant->isMobile."</td>
                <td class='user_num'>".$etudiant->num."</td>
                <td class='user_description'>".$etudiant->description."</td>
                <td class='user_avatar'>".$etudiant->avatar."</td>
                <td class='user_isUser'>".$etudiant->idUser."</td>
                <td class='user_last_login'>TODO</td>
                <td class='user_edit'><button data-id='".$etudiant->ID."' class='btn btn-success editUser'></button></td>
                <td class='user_remove'><button data-id='".$etudiant->ID."' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Etudiants</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Etudiants</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>prenom</th>
                        <th>nom</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>region</th>
                        <th>mobile</th>
                        <th>num</th>
                        <th>description</th>
                        <th>avatar</th>
                        <th>user</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>prenom</th>
                        <th>nom</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>region</th>
                        <th>mobile</th>
                        <th>num</th>
                        <th>description</th>
                        <th>avatar</th>
                        <th>user</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    displayTableUsers($etudiants);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->