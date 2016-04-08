<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/sign_in.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
    <div class="col-md-12">  
        <div class="col-md-12" style="margin-top: 30px; margin-bottom: 50px;">
				<div class="row">
					<div class="progress" id="progress1">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
						<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 20%"></div>
						<span class="progress-type">Progression</span>
						<span class="progress-completed">40%</span>
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
						<div class="col-md-2 activestep">
                            <a href="sign_in.php" style="color: #23527c;">
								<span class="fa fa-sign-in"></span>
                                <p>Inscription/Connexion</p>
							</a>							
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
    </div>
    <div class="row">
        <div class="col-md-4">
            
                <div class="form-box">
                    <div class="form-top">
	            		<div class="form-top-left">
	            			<h3>Connexion</h3>
                            <small>Entrer votre identifiant et mot de passe:</small>
	            		</div>
	                	<div class="form-top-right">
	            			<i class="fa fa-key"></i>
	                    </div>
	                </div>
                    <div class="form-bottom">
                        <form method="post">
                            <div class="form-group <?php
									if (isset($_POST['identifiantConnex'])){
										$_POST['identifiantConnex'] = htmlspecialchars($_POST['identifiantConnex']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#\w#", $_POST['identifiantConnex']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                <label for="identifiantConnex">Identifiant</label>
                                <input type="text" name="identifiantConnex" class="form-control" id="identifiantConnex" placeholder="Identifiant" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="mdpConnex">Mot de passe</label>
                                <input type="password" name="mdpConnex" class="form-control" id="mdpConnex" placeholder="Mot de passe" required="required"/>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Connexion</button>
                        </form>
                    </div>
                </div>
                
        </div>
        
        <div class="col-md-8">
            
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>S'inscrire</h3>
                                    <small>Renseigner tous les champs pour créer un compte:</small>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil panel-icon"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" method="post">
                                    <div class="form-group <?php
									if (isset($_POST['identifiant'])){
										$_POST['identifiant'] = htmlspecialchars($_POST['identifiant']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#\w#", $_POST['identifiant']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                        <label for="identifiant">Identifiant</label>
                                        <input type="text" name="identifiant" id="identifiant" class="form-control" placeholder="Identifiant">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="mdp">Mot de passe</label>
                                                <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group <?php
									if (isset($_POST['confirmMdp'])){
										$_POST['confirmMdp'] = htmlspecialchars($_POST['confirmMdp']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if ($_POST['confirmMdp'] == $_POST['mdp'])
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="confirmMdp">Confirmation mot de passe</label>
                                                <input type="password" name="confirmMdp" id="confirmMdp" class="form-control" placeholder="Confirmation mot de passe">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group <?php
									if (isset($_POST['email'])){
										$_POST['email'] = htmlspecialchars($_POST['email']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                        <label for="email">Adresse mail</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse mail">
                                    </div>
        
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group <?php
									if (isset($_POST['prenom'])){
										$_POST['prenom'] = htmlspecialchars($_POST['prenom']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#[a-zA-z]#", $_POST['prenom']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group <?php
									if (isset($_POST['nom'])){
										$_POST['nom'] = htmlspecialchars($_POST['nom']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("[a-zA-z]", $_POST['nom']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?> ">
                                                <label for="nom">Nom</label>
                                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Sexe</label>
                                        <div class="btn-group btn-width100" data-toggle="buttons">
                                            <label class="btn btn-primary width50">
                                              <input type="radio" name="sexe" id="homme" autocomplete="off"> Homme
                                            </label>
                                            <label class="btn btn-primary width50">
                                              <input type="radio" name="sexe" id="femme" autocomplete="off"> Femme
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group <?php
									if (isset($_POST['adresse1'])){
										$_POST['adresse1'] = htmlspecialchars($_POST['adresse1']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#^([0-9a-z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$#", $_POST['adresse1']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                        <label for="adresse1">Adresse</label>
                                        <input type="text" name="adresse1" id="adresse1" class="form-control" placeholder="Adresse (ligne 1)">
                                    </div>
                                    <div class="form-group <?php
									if (isset($_POST['adresse2'])){
										$_POST['adresse2'] = htmlspecialchars($_POST['adresse2']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#[a-zA-z]#", $_POST['adresse2']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?> ">
                                        <input type="text" name="adresse2" id="adresse2" class="form-control" placeholder="Adresse (ligne 2)">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group <?php
									if (isset($_POST['codePostal'])){
										$_POST['codePostal'] = htmlspecialchars($_POST['codePostal']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#^[0-9]{5}$#", $_POST['codePostal']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="codePostal">Code postal</label>
                                                <input type="text" name="codePostal" id="codePostal" class="form-control" placeholder="Code postal">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group<?php
									if (isset($_POST['ville'])){
										$_POST['ville'] = htmlspecialchars($_POST['ville']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#[a-zA-Z]#", $_POST['ville']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="ville">Ville</label>
                                                <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group <?php
									if (isset($_POST['dateNaissance'])){
										$_POST['dateNaissance'] = htmlspecialchars($_POST['dateNaissance']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$#", $_POST['dateNaissance']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="dateNaissance">Date de naissance</label>
                                                <input type="date" name="dateNaissance" id="dateNaissance" class="form-control" placeholder="Date de naissance">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group<?php
									if (isset($_POST['tel'])){
										$_POST['tel'] = htmlspecialchars($_POST['tel']);
										// On rend inoffensives les balises HTML que le visiteur a pu entrer
									
										if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['tel']))
										{
											echo 'has-success';
										}
										else
										{
											echo 'has-error';
										}
									}; ?>">
                                                <label for="tel">Téléphone</label>
                                                <input type="text" name="tel" id="tel" class="form-control" placeholder="Tél: 06.00.00.00.00">
                                            </div>
                                        </div>
                                    </div>
        
                                    <input type="submit" value="Register" class="btn btn-info btn-block">
                                </form>
                            </div>
                        </div>
            
        </div>
		
		<div class="col-md-12">
			<hr>
			<nav>
			    <ul class="pager">
				    <li class="previous"><a href="panier.php"><span aria-hidden="true">&larr;</span> Précédent</a></li>
				    <li class="next"><a href="paiement.php">Suivant <span aria-hidden="true">&rarr;</span></a></li>
			    </ul>
		    </nav>
		</div>
		
    </div>
</main>


<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>