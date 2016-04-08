<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/sign_in.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
        
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
                        <form>
                            <div class="form-group">
                                <label for="email">Identifiant</label>
                                <input type="email" class="form-control" id="email" placeholder="Identifiant" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mot de passe</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" required="required"/>
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
                                <form role="form">
                                    <div class="form-group">
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
                                            <div class="form-group">
                                                <label for="confirmMdp">Confirmation mot de passe</label>
                                                <input type="password" name="confirmMdp" id="confirmMdp" class="form-control" placeholder="Confirmation mot de passe">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Adresse mail</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse mail">
                                    </div>
        
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
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
                                    
                                    <div class="form-group">
                                        <label for="adresse1">Adresse</label>
                                        <input type="text" name="adresse1" id="adresse1" class="form-control" placeholder="Adresse (ligne 1)">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="adresse2" id="adresse2" class="form-control" placeholder="Adresse (ligne 2)">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="codePostal">Code postal</label>
                                                <input type="text" name="codePostal" id="codePostal" class="form-control" placeholder="Code postal">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ville">Ville</label>
                                                <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="dateNaissance">Date de naissance</label>
                                                <input type="date" name="dateNaissance" id="dateNaissance" class="form-control" placeholder="Date de naissance">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
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
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>