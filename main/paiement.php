<?php include('header.php')?>
<!-- Corps -->
<main class="container">
            
            <div class="col-md-12">  
        <div class="col-md-12" style="margin-top: 30px; margin-bottom: 50px;">
				<div class="row">
					<div class="progress" id="progress1">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 20%"></div>
						<span class="progress-type">Progression</span>
						<span class="progress-completed">60%</span>
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
						<div class="col-md-2 activestep">
                            <a href="paiement.php" style="color: #23527c;">
                                <span class="fa fa-eur"></span>
                                <p>Paiement</p>
                            </a>
						</div>
						<div id="last" class="col-md-3">
							<span class="fa fa-print"></span>
							<p>Facture</p>
						</div>
					</div>
				</div>
			</div>
    </div>
            
            <div class="col-md-12">
                <h1>Détails du paiement <small>(transaction sécurisé)</small></h1>
                <hr>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <dl class="dl-horizontal">
                    <dt>
                        Payer à
                    </dt>
                    <dd>
                        <address>
                            <strong>E-Processor, Inc.</strong><br>
                            1355 Rue du marché fleurie, Siège social<br>
                            17023, La Rochelle<br>
                            <abbr title="Téléphone">Tél:</abbr> 05.49.75.65.24
                        </address>
                    </dd>
                    <dt>
                        Paiement pour
                    </dt>
                    <dd>
                        Commande n°13453-RFE6
                    </dd>
                    <dt>
                        Devise
                    </dt>
                    <dd>
                        Euros
                    </dd>
                    <dt>
                        Montant
                    </dt>
                    <dd>
                        850€
                    </dd>
                    <dt>
                        Frais d'expédition et de livraison
                    </dt>
                    <dd>
                        8.50€
                    </dd>                    
                </dl>
            </div>
            <div class="col-md-3"></div>
            
            <div class="col-md-12">
                <h2>Paiement <small>Merci de renseigner tous les champs afin d'effectuer le paiement</small></h2>
                <hr>
            </div>
            
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="email">Identifiant</label>
                        <input type="email" class="form-control" id="email" placeholder="Identifiant" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" required="required"/>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Valider</button>
                </form>
            </div>
            <div class="col-md-3"></div>
			
			<div class="col-md-12">
			<hr>
				<nav>
				    <ul class="pager">
				        <li class="previous"><a href="sign_in.php"><span aria-hidden="true">&larr;</span> Précédent</a></li>
				        <li class="next"><a href="facture.php">Suivant <span aria-hidden="true">&rarr;</span></a></li>
				    </ul>
			    </nav>
			</div>
			
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>