<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/facture.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
    <div class="col-md-12">  
        <div class="col-md-12" style="margin-top: 30px; margin-bottom: 50px;">
				<div class="row">
					<div class="progress" id="progress1">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 20%"></div>
						<span class="progress-type">Progression</span>
						<span class="progress-completed">80%</span>
					</div>      
				</div>
				<div class="row">
					<div class="row step">
						
						<div id="div1" class="col-md-3">
							<a href="index.php">
								<span class="fa fa-cart-plus"></span>
								<p>Ajout d'article</p>
							</a>
						</div>				
						<div class="col-md-2">
							<a href="panier.php">
								<span class="fa fa-pencil"></span>
								<p>Commande</p>
							</a>
						</div>						
						<div class="col-md-2">
                            <a href="sign_in.php">
								<span class="fa fa-sign-in"></span>
                                <p>Inscription/Connexion</p>
							</a>							
						</div>
						<div class="col-md-2">
                            <a href="paiement.php">
                                <span class="fa fa-eur"></span>
                                <p>Paiement</p>
                            </a>
						</div>
						<div id="last" class="col-md-3 activestep">
                            <a href="facture.php" style="color: #23527c;">
                                <span class="fa fa-print"></span>
                                <p>Facture</p>
                            </a>
						</div>
					</div>
				</div>
			</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Facture #33221</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Informations personnelles</div>
                        <div class="panel-body">
                            <address>
                                <strong>David Marchand</strong><br>
                                13, Allée des abysses<br>
                                79230, Vouillé<br>
                                <abbr title="Téléphone">Tél:</abbr> 05.56.98.47.52
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Informations bancaire</div>
                        <div class="panel-body">
                            <strong>Type de carte:</strong> Visa<br>
                            <strong>Numéro de carte:</strong> ***** 332<br>
                            <strong>Date d'expiration:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Livraison / Promotion</div>
                        <div class="panel-body">
                            <strong>Type de livraison:</strong> UPS<br>
                            <strong>Coupon:</strong> Non<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Adresse de livraison</div>
                        <div class="panel-body">
                            <address>
                                <strong>David Marchand</strong><br>
                                13, Allée des abysses<br>
                                79230, Vouillé<br>
                                <abbr title="Téléphone">Tél:</abbr> 05.56.98.47.52
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Détails facture</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Nom</strong></td>
                                    <td class="text-center"><strong>Prix</strong></td>
                                    <td class="text-center"><strong>Quantité</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$nomArticle</td>
                                    <td class="text-center">150.00€</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">150.00€</td>
                                </tr>
                                <tr>
                                    <td>$nomArticle</td>
                                    <td class="text-center">150.00€</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">150.00€</td>
                                </tr>
                                <tr>
                                    <td>$nomArticle</td>
                                    <td class="text-center">150.00€</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">150.00€</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Sous-total</strong></td>
                                    <td class="highrow text-right">950.00€</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Frais de port</strong></td>
                                    <td class="emptyrow text-right">25€</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>TVA (20%)</strong></td>
                                    <td class="emptyrow text-right">20€</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">995.00€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
		<nav>
		    <ul class="pager">
		        <li class="previous"><a href="paiement.php"><span aria-hidden="true">&larr;</span> Précédent</a></li>
				<li class="next"><a href="dashboard.php">Suivant <span aria-hidden="true">&rarr;</span></a></li>
		    </ul>
		</nav>
	</div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>