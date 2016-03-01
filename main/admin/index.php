<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../../src/css/index_admin.css" rel="stylesheet">

<!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    
                        <h1>Tableau de bord <small>Mode Admin</small></h1>
                        <hr>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="15">15</span>
                                        </div>
                                        <div class="desc"> Historique Commande </div>
                                    </div>
                                <a class="more" href="histo_commande.php"> Voir détails
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="4">4</span>
                                    </div>
                                    <div class="desc"> Article Panier </div>
                                </div>
                                <a class="more" href="panier.php"> Voir détails
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="89"> $nomClient </span></div>
                                    <div class="desc"> Profil </div>
                                </div>
                                <a class="more" href="profil.php"> Voir détails
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="15">15</span>
                                        </div>
                                        <div class="desc"> Historique Commande </div>
                                    </div>
                                <a class="more" href="histo_commande.php"> Voir détails
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Intégration du js -->
    <script src="../../src/javascript/jquery.js"></script>
    <script src="../../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>