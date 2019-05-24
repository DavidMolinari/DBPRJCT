
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-user-friends"></i>
            </div>
            <div class="sidebar-brand-text mx-3">NAMELESS</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tableau de bords</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Meh
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Annonces</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Annonces</h6>
                    <a class="collapse-item" href="#" id="getAnnonces">Voir les annonces</a>
                    <a class="collapse-item" href="#">Déposer une annonce</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Demandeurs</h6>
                    <a class="collapse-item" href="#" id="getAnnonces">Voir les profils </a>
                    <a class="collapse-item" href="#">Meh</a>
                </div>
            </div>

        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Admin Interface</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Entities:</h6>
                    <a class="collapse-item" id="myUsers" href="#">Users</a>
                    <a class="collapse-item" id="myEtudiants" href="#">Etudiants</a>
<!--                    <a class="collapse-item" id="myRecruteurs" href="#">Recruteurs</a>-->
<!--                    <a class="collapse-item" id="myAnnonces" href="#">Annonces</a>-->
<!--                    <a class="collapse-item" id="myCompetences" href="#">Compétences</a>-->
<!--                    <a class="collapse-item" id="myPostes" href="#">Postes</a>-->
<!--                    <a class="collapse-item" id="myDiplomes" href="#">Diplomes</a>-->
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="charts.html">-->
<!--                <i class="fas fa-fw fa-chart-area"></i>-->
<!--                <span>Charts</span></a>-->
<!--        </li>-->

        <!-- Nav Item - Tables -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="/views/tables.html">-->
<!--                <i class="fas fa-fw fa-table"></i>-->
<!--                <span>Tables</span></a>-->
<!--        </li>-->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
                <?php include_once 'nav.php' ?>

                <div class="entitiesTables"></div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

