<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/manager/ecoleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/entity/ecole.php';
$ecoleManager = new ecoleManager();

if (isset($_GET['delete'])) {
     $ecoleManager->deleteEcole($_GET['order_id']);
    $ecoles = $ecoleManager->getEcoles();
}
	//private $cp;
    //private $nom;
    //private $ville;
    //private $id_ecole;
    //private $adresse;
if(isset($_GET['add'])){
    $ecole = new ecole();
	$ecole->setCp($_POST['Cp'] != null ? $_POST['Cp'] : "");
    $ecole->setNom($_POST['Nom'] != null ? $_POST['Nom'] : "");
    $ecole->setVille($_POST['Ville'] != null ? $_POST['Ville'] : "");
    $ecole->setIdEcole($_POST['id_ecole'] != null ? $_POST['id_ecole'] : "");
    $ecole->setAdresse($_POST['adresse'] != null ? $_POST['adresse'] : "");
    $ecoleManager->addEcole($ecole);
    $ecoles = $ecoleManager->getEcole();

}
if(isset($_GET['g'])){
	echo("ouai");
    $ecoles = $ecoleManager->getEcoles();
}

function displayTableEcoles($ecoles)
{
    foreach ($ecoles as $ecole) {
        echo
            "<tr>
                <td class='ecole_cp'>" . $ecole->cp . "</td>
                <td class='ecole_nom'>" . $ecole->nom . "</td>
                <td class='ecole_ville'>" . $ecole->ville . "</td>
                <td class='ecole_idEcole'>" . $ecole->id_ecole . "</td>
                <td class='ecole_adresse'>" . $ecole->adresse . "</td>
				</tr>";
    }
}

?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Ecoles</h1>
    <button class="btn btn-success" id="ajouterEcole" style="margin: 1em;">Ajouter une ecole ?</button>

    <form action="/core/ecole/ecoles.php?add" method="post" style="display: none; margin: 1em;" id="formAddEcole">
        <div class="meh" style="display: inline-block;">
            <div class="form-group">
                <label for="Cp">Cp</label>
                <input type="cp" name="Cp" class="form-control" id="Cp" placeholder="Cp">
            </div>
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="nom" name="Nom" class="form-control" id="Nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="Ville">Ville</label>
                <input type="text" class="form-control" name="Ville" id="Ville" placeholder="Ville">
            </div>
			 <div class="form-group">
                <label for="id_ecole">id_ecole</label>
                <input type="text" class="form-control" name="id_ecole" id="id_ecole" placeholder="id_ecole">
            </div>
			<div class="form-group">
                <label for="adresse">adresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'ecole</button>

    </form>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ecoles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Cp</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>id_ecole</th>
                        <th>adresse</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Cp</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>id_ecole</th>
                        <th>adresse</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php displayTableEcoles($ecoles); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

