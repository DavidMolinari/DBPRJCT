<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
<?php include_once 'views/head.php'; ?>
    <body class="baseMainContainer">
<?php
if(isset($_SESSION['TODO'])) {

    //TODO Basic template

    include_once 'views/indView.php';

}
else
    include_once 'views/login.html';
?>


    <!--    DATATABLE-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src=vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    </body>
</html>

