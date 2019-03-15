<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 15/03/2019
 * Time: 12:13
 */

if(file_exists('../../../vendor/autoload.php')) require_once '../../../vendor/autoload.php';

if(isset($_GET['g'])){

    require_once '../../class/manager/userManager.php';
    $userManager = new UserManager();
    $users = $userManager->getUsers();
}

function displayTableUsers($users){
    foreach($users as $user){
        echo
            "<tr>
                <td class='user_id'>".$user->ID."</td>
                <td class='user_login'>".$user->LOGIN."</td>
                <td class='user_password'>".$user->PASSWORD."</td>
                <td class='user_register_date'>".$user->REGISTER_DATE."</td>
                <td class='user_last_login'>TODO</td>
                <td class='user_edit'><button data-id='".$user->ID."' class='btn btn-success editUser'></button></td>
                <td class='user_remove'><button data-id='".$user->ID."' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Utilisateurs</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Utilisateur</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Login</th>
                        <th>Password</th>
                        <th>registerDate</th>
                        <th>lastLogin</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Login</th>
                        <th>Password</th>
                        <th>registerDate</th>
                        <th>lastLogin</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    displayTableUsers($users);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

