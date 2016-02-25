<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/panier.css" rel="stylesheet">
	<link href="../src/bootstrap-3.3.6-dist/css/jquery.bootstrap-touchspin.css" rel="stylesheet">

<!-- Corps -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
			
			<div class="container" style="margin-top: 30px; margin-bottom: 50px;">
				<div class="row">
					<div class="progress" id="progress1">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">                
						</div>
						<span class="progress-type">Progression</span>
						<span class="progress-completed">20%</span>
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
						<div class="col-md-2 activestep">
							<a href="panier.php" style="color: #23527c;">
								<span class="fa fa-pencil"></span>
								<p>Commande</p>
							</a>
						</div>						
						<div class="col-md-2">
							<span class="fa fa-sign-in"></span>
							<p>Inscription/Connexion</p>
						</div>
						<div class="col-md-2">
							<span class="fa fa-eur"></span>
							<p>Paiement</p>
						</div>
						<div id="last" class="col-md-3">
							<span class="fa fa-print"></span>
							<p>Facture</p>
						</div>
					</div>
				</div>
			</div>
			
				<div class="row"><!-- Tableau Panier -->
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="desc">Description</th>
                                    <th>Quantité</th>
                                    <th>Prix (unité)</th>
                                    <th>Prix total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
										<div class="spinner-group">
											<input id="demo1" class="spinner" type="text" value="1" name="demo1">
										</div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
                                        <div class="spinner-group">
											<input id="demo2" class="spinner" type="text" value="1" name="demo2">
										</div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
                                        <div class="spinner-group">
											<input id="demo3" class="spinner" type="text" value="1" name="demo3">
										</div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div><!-- Fin du Tableau -->


				<div class="row">
                    <div class="col-md-7">
                        <div class="form-horizontal">
							<div class="form-group">
								<h4>Avez vous un code de réduction?</h4>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
									  <input type="radio" name="options" id="option1" autocomplete="off" checked> Oui
									</label>
									<label class="btn btn-primary active">
									  <input type="radio" name="options" id="option2" autocomplete="off"> Non
									</label>
								</div>
							</div>
							<div class="form-group">
								<label>Code de réduction</label>
								<input type="email" class="form-control" id="codeReduc" placeholder="Code promo">
							</div>
                            <div class="form-group">
                                <label>Mode de livraison</label>                            
								<div class="btn-group btn-width100" data-toggle="buttons">
									<label class="btn btn-primary active">
									  <input type="radio" name="options" id="option1" autocomplete="off" checked> Point relais
									</label>
									<label class="btn btn-primary">
									  <input type="radio" name="options" id="option2" autocomplete="off"> À domicile
									</label>
									<label class="btn btn-primary">
									  <input type="radio" name="options" id="option3" autocomplete="off"> Chronopost (48h)
									</label>
									<label class="btn btn-primary">
									  <input type="radio" name="options" id="option4" autocomplete="off"> Chronopost (24h)
									</label>
									<label class="btn btn-primary">
									  <input type="radio" name="options" id="option5" autocomplete="off"> UPS
									</label>
								</div>
							</div>
						</div>                        
                        <div class="form-group text-right">							
							<button type="button" class="btn">Annuler</button>
							<button type="button" class="btn btn-primary">Valider</button>
						</div>
                    </div><!--end span7-->
    
    
                    <div class="col-md-5">
                        <div class="cart-receipt">
                            <table class="table table-receipt">
                                <tbody><tr>
                                    <td class="alignRight">Sous Total</td>
                                    <td class="alignLeft">600.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">Frais de port</td>
                                    <td class="alignLeft">15.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">Réduction</td>
                                    <td class="alignLeft">0.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">TVA (20%)</td>
                                    <td class="alignLeft">12.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><h2>Total</h2></td>
                                    <td class="alignLeft"><h2>825.00€</h2></td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><button class="btn">Continuer Shopping</button></td>
                                    <td class="alignLeft"><button class="btn btn-primary">Commander</button></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
				</div><!--end span5-->
    </div>
</div>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="../src/bootstrap-3.3.6-dist/js/jquery.bootstrap-touchspin.min.js"></script>
	<script src="../src/javascript/panier.js"></script>

<?php include('footer.php') ?>