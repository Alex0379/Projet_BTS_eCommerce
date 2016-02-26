<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/histo_commande.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
            </div>
            
            <div class="col-md-12">
                <h1>Historique de commande</h1>
                <hr>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="desc">Réf. Facture</th>
                            <th>Date</th>
                            <th>Montant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="desc">#3325</th>
                            <td>20/10/2014</td>
                            <td>745.00€</td>
                            <td>
                                <button class="btn btn-small btn-success" data-title="Details" data-placement="top" data-toggle="tooltip" data-original-title="Voir facture" title="Voir facture"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-small btn-danger" data-title="Contact" data-placement="top" data-toggle="tooltip" data-original-title="Nous contacter" title="Nous contacter"><i class="fa fa-question"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th class="desc">#5632</th>
                            <td>31/04/2015</td>
                            <td>695.00€</td>
                            <td>
                                <button class="btn btn-small btn-success" data-title="Details" data-placement="top" data-toggle="tooltip" data-original-title="Voir facture" title="Voir facture"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-small btn-danger" data-title="Contact" data-placement="top" data-toggle="tooltip" data-original-title="Nous contacter" title="Nous contacter"><i class="fa fa-question"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th class="desc">#7950</th>
                            <td>15/07/2015</td>
                            <td>986.00€</td>
                            <td>
                                <button class="btn btn-small btn-success" data-title="Details" data-placement="top" data-toggle="tooltip" data-original-title="Voir facture" title="Voir facture"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-small btn-danger" data-title="Contact" data-placement="top" data-toggle="tooltip" data-original-title="Nous contacter" title="Nous contacter"><i class="fa fa-question"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th class="desc">#9865</th>
                            <td>19/12/2015</td>
                            <td>475.00€</td>
                            <td>
                                <button class="btn btn-small btn-success" data-title="Details" data-placement="top" data-toggle="tooltip" data-original-title="Voir facture" title="Voir facture"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-small btn-danger" data-title="Contact" data-placement="top" data-toggle="tooltip" data-original-title="Nous contacter" title="Nous contacter"><i class="fa fa-question"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>