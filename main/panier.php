<?php include('header.php');

if($_SESSION['nbr_articles']==0){
		echo '<h1>Aucun article dans le panier';
		include('footer.php');
}else{
?>

<!-- Intégration du css -->
    <link href="../src/css/panier.css" rel="stylesheet">
	<link href="../src/bootstrap-3.3.6-dist/css/jquery.bootstrap-touchspin.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
        <div class="col-md-12">
			
			<div class="col-md-12" style="margin-top: 30px; margin-bottom: 50px;">
				<div class="row">
					<div class="progress" id="progress1">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
						<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 20%"></div>
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
						<form method="post">
								<input type='hidden' id='num_ligne' name='no_ligne'>
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
								<?php
									//Affichage du panier à l'aide des variables de session
									for($i=0;$i<$_SESSION['nbr_articles'];$i++){
									// pas d'affichage pour les lignes pour lesquelles la quantité est 0	
									if ($_SESSION['quantite'][$i]>0){
								?>
                                <tr>
                                    <td>
                                        <a href="description_Article.php?id_article=<?php echo $_SESSION['id_article'][$i]; ?>"><img class="img-thumbnail" src="../images/90x90.png" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="description_Article.php?id_article=<?php echo $_SESSION['id_article'][$i]; ?>">
                                            <?php echo $_SESSION['nom_famille'][$i] . " " . $_SESSION['modele'][$i]; ?>
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li><?php echo "REF" . $_SESSION['id_article'][$i] . "PI" . $_SESSION['id_famille'][$i]; ?></li>
                                            <li><?php echo $_SESSION['jeux_instruction'][$i] . "bits"; ?></li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
										<div class="spinner-group">
											<input id="spinner<?php echo $i ?>" class="spinner" type="text" value="<?php echo $_SESSION['quantite'][$i]; ?>" name="quantite<?php echo $i; ?>">
										</div>
                                    </td>
                                    <td class="sub-price">
                                        <h3><?php echo $_SESSION['prix'][$i]; ?>€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3><?php echo $prixArticle=$_SESSION['prix'][$i]*$_SESSION['quantite'][$i] . "€"; ?></h3>
                                        <small class="ecoPart">Eco-part: <?php echo $_SESSION['prix'][$i]*0.01; ?>€</small>
                                    </td>
                                    <td>
                                        <button type="submit" class="recup-ligne btn btn-small" data-num-ligne="<?php echo $i; ?>" name="bouton" value="Refresh"><i class="fa fa-refresh"></i></button>
                                        <button type="submit" class="recup-ligne btn btn-small btn-success" data-num-ligne="<?php echo $i; ?>" name="bouton" value="Modifier"><i class="fa fa-pencil"></i></button>
                                        <button type="submit" class="recup-ligne btn btn-small btn-danger" data-num-ligne="<?php echo $i; ?>" name="bouton" value="Supprimer"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
								<?php
										} // Fin du if
									} // Fin du for
								?>
                            </tbody>
                        </table>
						</form>
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
                                    <td class="alignLeft"><?php $prixTotal = 0; echo $prixTotal = $prixTotal + $prixArticle; ?>€</td>
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
                                    <td class="alignLeft"><?php $TVA = 0; echo $TVA = $prixTotal * 0.2; ?>€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><h2>Total</h2></td>
                                    <td class="alignLeft"><h2><?php $_SESSION['prixTTC'] = 0; echo $_SESSION['prixTTC'] = $prixTotal + $TVA + 15; ?>€</h2></td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><a href="index.php" class="btn">Continuer Shopping</a></td>
                                    <td class="alignLeft"><a href="sign_in.php" class="btn btn-primary">Commander</a h></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
				</div><!--end span5-->
			</div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="../src/bootstrap-3.3.6-dist/js/jquery.bootstrap-touchspin.min.js"></script>
	<script src="../src/javascript/panier.js"></script>

<?php include('footer.php');
} ?>