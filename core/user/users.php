<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/manager/userManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/entity/user.php';
$userManager = new UserManager();

if (isset($_GET['delete'])) {
     $userManager->deleteUser($_GET['order_id']);
    $users = $userManager->getUsers();
}

if(isset($_GET['add'])){
    $user = new User();
    $user->setPrenom($_POST['Prénom'] != null ? $_POST['Prénom'] : "");
    $user->setNom($_POST['Nom'] != null ? $_POST['Nom'] : "");
    $user->setSexe($_POST['Sexe'] != null ? $_POST['Sexe'] : "");
    $user->setAdresse($_POST['Adresse'] != null ? $_POST['Adresse'] : "");
    $user->setCp($_POST['Cp'] != null ? $_POST['Cp'] : "");
    $user->setEmail($_POST['Email'] != null ? $_POST['Email'] : "");
    $user->setVille($_POST['Ville'] != null ? $_POST['Ville'] : "");
    $user->setTel($_POST['Tel'] != null ? $_POST['Tel'] : "");
    $user->setRegisterDate(date("Y-m-d H:i:s"));
    $user->setIsAdmin(0);
    $userManager->addUser($user);
    $users = $userManager->getUsers();

}
if(isset($_GET['g'])){

    $users = $userManager->getUsers();
}

function displayTableUsers($users)
{
    foreach ($users as $user) {
        echo
            "<tr>
                <td class='user_id'>" . $user->id_user . "</td>
                <td class='user_login'>" . $user->email . "</td>
                <td class='user_prenom'>" . $user->prenom . "</td>
                <td class='user_nom'>" . $user->nom . "</td>
                <td class='user_sexe'>" . $user->sexe . "</td>
                <td class='user_adresse'>" . $user->adresse . "</td>
                <td class='user_cp'>" . $user->cp . "</td>
                <td class='user_ville'>" . $user->ville . "</td>
                <td class='user_tel'>" . $user->tel . "</td>
                <td class='user_register_date'>" . $user->register_date . "</td>
                <td class='user_is_admin'>" . $user->is_admin . "</td>
                <td class='user_edit'><button data-id='" . $user->id_user . "' class='btn btn-success editUser' ></button></td>
                <td class='user_remove'><button data-id='" . $user->id_user . "' class='btn btn-danger removeUser'></button></td>
            </tr>";
    }
}

?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Utilisateurs</h1>
    <button class="btn btn-success" id="ajouterUser" style="margin: 1em;">Ajouter un utilisateur ?</button>

    <form action="/DBPRJCT/core/user/users.php?add" method="post" style="display: none; margin: 1em;" id="formAddUser">
        <div class="meh" style="display: inline-block;">
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="Email" class="form-control" id="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="Prénom">Prénom</label>
                <input type="text" class="form-control" name="Prénom" id="Prénom" placeholder="Prénom">
            </div>
        </div>
        <div class="meh" style="display: inline-block;">

            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse</label>
                <input type="text" class="form-control" id="Adresse" placeholder="Adresse" name="Adresse">
            </div>
            <div class="form-group">
                <label for="Cp">Cp</label>
                <input type="text" class="form-control" id="Cp" placeholder="Cp" name="Cp">
            </div>
        </div>
        <div class="meh" style="display: inline-block;">

            <div class="form-group">
                <label for="Ville">Ville</label>
                <input type="text" class="form-control" id="Ville" placeholder="Ville" name="Ville">
            </div>
            <div class="form-group">
                <label for="Tel">Tel</label>
                <input type="text" class="form-control" id="Tel" placeholder="Tel" name="Tel">
            </div>
            <div class="form-group">
                <label for="Tel">Sexe</label>
                <select name="Sexe" id="sexe" class="form-control">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="isAdmin">Administrateur ? </label>
            <input type="checkbox" name="isAdmin">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>

    </form>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Utilisateur</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Sexe</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                        <th>Tel</th>
                        <th>Inscription</th>
                        <th>admin</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Sexe</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                        <th>Tel</th>
                        <th>Inscription</th>
                        <th>admin</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php displayTableUsers($users); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

