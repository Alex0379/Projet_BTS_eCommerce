<?php
include('header.php'); 
  // Connexion à la base de données
  $idcom = connex($DB);
  
  // Requête sql
  $sql = "SELECT * FROM `client`";
?>
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
						<?php
							$resultat = $idcom->query($sql) or die("Erreur requête");
							while($donnees = $resultat->fetch()){
								$prenom=$donnees['prenom'];
								$nom=$donnees['nom'];
								$adresse1=$donnees['adresse_ligne1'];
								$adresse2=$donnees['adresse_ligne2'];
								$code_postal=$donnees['code_postal'];
								$ville=$donnees['ville'];
								$telephone=$donnees['telephone'];
						?>
                        <div class="panel-heading">Informations personnelles</div>
                        <div class="panel-body">
                            <address>
                                <strong><?php echo $prenom . " " . $nom; ?></strong><br>
                                <?php echo $adresse1 . " " . $adresse2; ?><br>
                                <?php echo $code_postal . ", " . $ville; ?><br>
                                <abbr title="Téléphone">Tél:</abbr> <?php echo $telephone; ?>
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
                                <strong><?php echo $prenom . " " . $nom; ?></strong><br>
                                <?php echo $adresse1 . " " . $adresse2; ?><br>
                                <?php echo $code_postal . ", " . $ville; ?><br>
                                <abbr title="Téléphone">Tél:</abbr> <?php echo $telephone;
							} // Fin while
								?>
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
								<?php
									//Affichage du panier à l'aide des variables de session
									for($i=0;$i<$_SESSION['nbr_articles'];$i++){
									// pas d'affichage pour les lignes pour lesquelles la quantité est 0	
									if ($_SESSION['quantite'][$i]>0){
								?>
                                <tr>
                                    <td><?php echo $_SESSION['nom_famille'][$i] . " " . $_SESSION['modele'][$i] . " - " . "REF" . $_SESSION['id_article'][$i] . "PI" . $_SESSION['id_famille'][$i]; ?></td>
                                    <td class="text-center"><?php echo $_SESSION['prix'][$i]; ?>€</td>
                                    <td class="text-center"><?php echo $_SESSION['quantite'][$i]; ?></td>
                                    <td class="text-right"><?php echo $prixArticle=$_SESSION['prix'][$i]*$_SESSION['quantite'][$i] ; ?>€</td>
                                </tr>
                               <?php
									} // Fin if
									} // Fin for
							   ?>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Sous-total</strong></td>
                                    <td class="highrow text-right"><?php $prixTotal = 0; echo $prixTotal = $prixTotal + $prixArticle; ?>€</td>
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
                                    <td class="emptyrow text-right"><?php $TVA = 0; echo $TVA = $prixTotal * 0.2; ?>€</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right"><?php $prixTTC = 0; echo $prixTTC = $prixTotal + $TVA + 15; ?>€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php'); ?>