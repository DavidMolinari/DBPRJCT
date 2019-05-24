<?php
session_start();
// TODO REQUIRE USER MANAGER
require_once    $_SERVER['DOCUMENT_ROOT'] . '/database/Database.php';
include_once    $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
if (!isset($_POST['email']) && !isset($_POST['pwd']))
    die('Paramètres manquants');
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/manager/userManager.php';

$userManager = new UserManager();
$login = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['pwd']);

if ($userManager->auth($login, $password) == true) {

    $_SESSION['TODO'] = $login;
    echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
} else {
    echo "<h2 style='color: red;'> IDENTIFIANTS NON VALIDES !</h2>";
}
