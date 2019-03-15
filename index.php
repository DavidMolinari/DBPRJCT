<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
<?php include_once 'views/head.php'; ?>
    <body>
<?php
if(isset($_SESSION['TODO'])) {

    //TODO Basic template

    include_once 'views/indView.php';

}
else
    include_once 'views/login.html';
?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src=vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    </body>
</html>

