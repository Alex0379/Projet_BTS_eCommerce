<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/sign_in.css" rel="stylesheet">
	<link href="../src/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet">
	

<!-- Corps -->
<main class="container">
        
    <div class="row">
		<div class="col-md-1"></div>
        <div class="col-md-10">
            
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
                                <form id="inscriptionForm" method="post" role="form">
                                    <div class="form-group">
                                        <label for="identifiant">Identifiant</label>
                                        <input type="text" name="identifiant" id="identifiant" class="form-control" placeholder="Identifiant">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="mot_de_passe">Mot de passe</label>
                                                <input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control" placeholder="Mot de passe">
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
                                              <input type="radio" name="sexe" id="homme" value="Homme"> Homme
                                            </label>
                                            <label class="btn btn-primary width50">
                                              <input type="radio" name="sexe" id="femme" value="Femme"> Femme
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
										<div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="pays">Pays</label>
                                                <input type="text" name="pays" id="pays" class="form-control" placeholder="Ville">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="ville">Ville</label>
                                                <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville">
                                            </div>
                                        </div>
										<div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="code_postal">Code postal</label>
                                                <input type="text" name="code_postal" id="code_postal" class="form-control" placeholder="Code postal">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="date_naissance">Date de naissance</label>
                                                <input name="date_naissance" id="date_naissance" type="text" class="form-control" placeholder="YYYY-MM-DD">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="telephone">Téléphone</label>
                                                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Tél: 06.00.00.00.00">
                                            </div>
                                        </div>
                                    </div>
        
                                    <input type="submit" value="S'inscrire" class="btn btn-info btn-block">
                                </form>
                            </div>
                        </div>
            <div class="col-md-1"></div>
        </div>	
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="../src/javascript/bootstrap-datepicker.min.js"></script>
	<script src="../src/javascript/inscription.js"></script>
	<script>
		$('#date_naissance').datepicker({
			format: "yyyy-mm-dd"
		});
	</script>
	

<?php
if( isset($_POST['identifiant'])){
	// Récupérer les valeurs
	$identifiant = $_POST['identifiant'];
	$motdepasse = $_POST['mot_de_passe'];
	$confirmationMdp = $_POST['confirmMdp'];
	$email = $_POST['email'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$sexe = $_POST['sexe'];
	$adresse1 = $_POST['adresse1'];
	$adresse2= $_POST['adresse2'];
	$pays = $_POST['pays'];
	$ville = $_POST['ville'];
	$code_postal = $_POST['code_postal'];
	$date_naissance = $_POST['date_naissance'];
	$telephone = $_POST['telephone'];

	// Vérifier si tous les champs ont été renseignés. S’il manque une valeur, 
	// renvoyer un message d’erreur.
	
	if ( (trim($identifiant)=="") || (trim($motdepasse)=="") || 
		 (trim($confirmationMdp)=="") || (trim($email)=="") || 
		 (trim($prenom)=="") || (trim($nom)=="") || 
		 (trim($adresse1)=="") || (trim($pays)=="") ||
		 (trim($ville)=="") || (trim($code_postal)==")" ||
		 (trim($date_naissance)=="") || (trim($telephone)==""))){
			echo "<script>
				$(function(){
					PNotify.prototype.options.styling = 'bootstrap3';
					new PNotify({
						title: 'Erreur de saisie',
						text: 'Recommencez.',
						type: 'error'
					});
				});
			</script>";
			exit();
	   }else if ($motdepasse != $confirmationMdp) { 
		  // Si les deux mots de passe ne sont pas identiques générer un message d’erreur
		   echo "<script>
				$(function(){
					PNotify.prototype.options.styling = 'bootstrap3';
					new PNotify({
						title: 'Erreur',
						text: 'Les mots de passe ne sont pas identique. Recommencez.',
						type: 'error'
					});
				});
			</script>"; 
		  exit();
	   }
	   
	// ouvrir une connexion avec la base de données
	$idcom = connex($DB);
	
	// Créer enregistrement de l’utilisateur
   // Si enregistrement est un succès, afficher, sinon envoyer un message d’erreur.
   $requete = "INSERT INTO `eprocessor`.`client`
   (`id_client`, `prenom`, `nom`, `date_naissance`, `adresse_ligne1`, `adresse_ligne2`,
   `code_postal`, `ville`, `pays`, `telephone`, `sexe`, `identifiant`, `mot_de_passe`)
		VALUES
		(NULL, '$prenom', '$nom', '$date_naissance', '$adresse1', '$adresse2', '$code_postal',
		'$ville', '$pays', '$telephone', '$sexe', '$identifiant', '$motdepasse');";
	$idcom->exec($requete) or die("ERREUR D'INSERTION ".$nom);
	echo "<script>
		$(function(){
			PNotify.prototype.options.styling = 'bootstrap3';
			new PNotify({
				title: 'Bravo',
				text: 'Enregistrement effectué correctemment',
				type: 'success'
			});
		});
	</script>";
    exit();
}

include('footer.php');
?>