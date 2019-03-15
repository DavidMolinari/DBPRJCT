<?php
session_start();
// TODO REQUIRE USER MANAGER
require_once '../database/Database.php';
if(!isset($_POST['email']) && !isset($_POST['pwd']))
    die('Paramètres manquants');

$login = htmlspecialchars($_POST['inputEmail']);
$password = htmlspecialchars($_POST['inputPassword']);
// Création d'une connexion avec des données en brut ( flemme )
// Connexion directement depuis le Manager
// Création d'un admin manager
//if($adminManager->verifyLogin($admin) == true ) {
//    $_SESSION['admin'] = serialize($admin);
    // Affichage de la page admin;
    $_SESSION['TODO'] = 'TODO';
    echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
//} else {
//    echo "<h2 style='color: red;'> IDENTIFIANTS NON VALIDES !</h2>";
