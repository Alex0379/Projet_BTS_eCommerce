<?php
require('../src/php/fonctions.php');
session_start();

if(isset($_POST['identifiantHeader'])){
        // Récupération des valeurs

        $utilisateur=$_POST['identifiantHeader'];
        $motdepasse=$_POST['mot_de_passeHeader'];

        if(IdentifieUtilisateur($utilisateur, $motdepasse)){
            
            global $HTTP_HOST, $DOCROOT;
            
            $_SESSION['mot_de_passe'] = $motdepasse;
            $_SESSION['identifiant'] = $utilisateur;
			if(!isset($_SESSION['nbr_articles'])){
				$_SESSION['nbr_articles'] = 0;
			}
            header("Location: http://$HTTP_HOST/$DOCROOT/dashboard.php"); 
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }
    
if(isset($_POST['identifiantConnex'])){
        // Récupération des valeurs

        $utilisateur=$_POST['identifiantConnex'];
        $motdepasse=$_POST['mdpConnex'];

        if(IdentifieUtilisateur($utilisateur, $motdepasse)){
            
            global $HTTP_HOST, $DOCROOT;
            
            $_SESSION['mot_de_passe'] = $motdepasse;
            $_SESSION['identifiant'] = $utilisateur;
            if(!isset($_SESSION['nbr_articles'])){
				$_SESSION['nbr_articles'] = 0;
			}
            header("Location: http://$HTTP_HOST/$DOCROOT/paiement.php"); 
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }
	
if(isset($_POST['identifiantPaiement'])){
        // Récupération des valeurs

        $utilisateur=$_POST['identifiantPaiement'];
        $motdepasse=$_POST['mdpPaiement'];

        if(IdentifieUtilisateur($utilisateur, $motdepasse)){
            global $HTTP_HOST, $DOCROOT;
            header("Location: http://$HTTP_HOST/$DOCROOT/facture.php"); 
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }
	
if (isset($_POST['bouton'])) {
	switch ($_POST['bouton']) {
		case "Modifier":
			for($i=0; $i<$_SESSION["nbr_articles"];$i++){
                $quantite = 'quantite' . $i;
				$_SESSION["quantite"][$i] = $_POST[$quantite];
				if($_POST[$quantite]==0){
					for($i=0; $i<$_SESSION["nbr_articles"]-1;$i++){
						$_SESSION["id_article"][$i]=$_SESSION["id_article"][$i+1];
						$_SESSION["id_famille"][$i]=$_SESSION["id_famille"][$i+1];
						$_SESSION["nom_famille"][$i]=$_SESSION["nom_famille"][$i+1];
						$_SESSION["marque"][$i]=$_SESSION["marque"][$i+1];
						$_SESSION["modele"][$i]=$_SESSION["modele"][$i+1];
						$_SESSION["frequence"][$i]=$_SESSION["frequence"][$i+1];
						$_SESSION["jeux_instruction"][$i]=$_SESSION["jeux_instruction"][$i+1];
						$_SESSION["tension"][$i]=$_SESSION["tension"][$i+1];
						$_SESSION["nb_coeur"][$i]=$_SESSION["nb_coeur"][$i+1];
						$_SESSION["socket"][$i]=$_SESSION["socket"][$i+1];
						$_SESSION["prix"][$i]=$_SESSION["prix"][$i+1];
						$_SESSION["quantite"][$i]=$_SESSION["quantite"][$i+1];
					}
					
					for($i=$_SESSION["nbr_articles"]-1; $i<=$_SESSION["nbr_articles"];$i++){
						unset($_SESSION["id_article"][$i],
							$_SESSION["id_famille"][$i],
							$_SESSION["nom_famille"][$i],
							$_SESSION["marque"][$i],
							$_SESSION["modele"][$i],
							$_SESSION["frequence"][$i],
							$_SESSION["jeux_instruction"][$i],
							$_SESSION["tension"][$i],
							$_SESSION["nb_coeur"][$i],
							$_SESSION["socket"][$i],
							$_SESSION["prix"][$i],
							$_SESSION["quantite"][$i]);
					}
					
					$_SESSION["nbr_articles"] = $_SESSION["nbr_articles"] - 1;
				}
				header("Location:http://$HTTP_HOST/$DOCROOT/panier.php");
			}
			break;
		case "Refresh":
			header("Location:http://$HTTP_HOST/$DOCROOT/panier.php"); 
			break;
		case "Supprimer":
			
			for($i=0; $i<$_SESSION["nbr_articles"]-1;$i++){
				$_SESSION["id_article"][$i]=$_SESSION["id_article"][$i+1];
				$_SESSION["id_famille"][$i]=$_SESSION["id_famille"][$i+1];
				$_SESSION["nom_famille"][$i]=$_SESSION["nom_famille"][$i+1];
				$_SESSION["marque"][$i]=$_SESSION["marque"][$i+1];
				$_SESSION["modele"][$i]=$_SESSION["modele"][$i+1];
				$_SESSION["frequence"][$i]=$_SESSION["frequence"][$i+1];
				$_SESSION["jeux_instruction"][$i]=$_SESSION["jeux_instruction"][$i+1];
				$_SESSION["tension"][$i]=$_SESSION["tension"][$i+1];
				$_SESSION["nb_coeur"][$i]=$_SESSION["nb_coeur"][$i+1];
                $_SESSION["socket"][$i]=$_SESSION["socket"][$i+1];
				$_SESSION["prix"][$i]=$_SESSION["prix"][$i+1];
				$_SESSION["quantite"][$i]=$_SESSION["quantite"][$i+1];
			}
			
			for($i=$_SESSION["nbr_articles"]-1; $i<=$_SESSION["nbr_articles"];$i++){
				unset($_SESSION["id_article"][$i],
					$_SESSION["id_famille"][$i],
					$_SESSION["nom_famille"][$i],
					$_SESSION["marque"][$i],
					$_SESSION["modele"][$i],
					$_SESSION["frequence"][$i],
					$_SESSION["jeux_instruction"][$i],
					$_SESSION["tension"][$i],
					$_SESSION["nb_coeur"][$i],
					$_SESSION["socket"][$i],
					$_SESSION["prix"][$i],
					$_SESSION["quantite"][$i]);
			}
			
			$_SESSION["nbr_articles"] = $_SESSION["nbr_articles"] - 1;
			
			header("Location:http://$HTTP_HOST/$DOCROOT/panier.php");
			break;
		default:
			break;
	}
}

// Récupération des valeurs boutons/déco
if(isset($_POST["deconnexion"])){
  SupprimeSession();
  
  header("Location: http://$HTTP_HOST/$DOCROOT/accueil.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E - Processor</title>
    <link href="../src/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../src/css/header_footer.css" rel="stylesheet">
    <link href="../src/css/font-awesome.min.css" rel="stylesheet">
	<link href="../src/css/bootstrapValidator.min.css" rel="stylesheet">
	<link href="../src/css/pnotify.css" rel="stylesheet">
	<script src="../src/javascript/jquery.js"></script>
  </head>
  <body>
    
    <img id="bandeau-top" class="slide-image" src="../images/e-processor.jpg" alt="">
    
    <!-- Navigation -->
    <nav id="navbar-main" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img class="logoEProcessor" src="../images/logo-E-Processor.png">
        <a class="navbar-brand" href="accueil.php">E - Processor</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Index <span class="sr-only">(current)</span></a></li>
          <li><a href="a_propos.php">A propos</a></li>
          <li><a href="contact.php">Nous Contacter</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="resultat_recherche.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Recherche..." name="motCle">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search" name="boutonRecherche"></i></button>
            </span>
          </div>
        </form>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-shopping-cart"></i> Panier <span class="badge">
				<?php
					if(!isset($_SESSION['nbr_articles'])){
					  $_SESSION['nbr_articles'] = 0;
					  echo $_SESSION['nbr_articles'];
					}else{
						echo $_SESSION['nbr_articles'];
					}
				?>
			</span><span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-cart" role="menu">
				<?php
					//Affichage du panier à l'aide des variables de session
					$total=0;
					for($i=0;$i<$_SESSION['nbr_articles'];$i++){
					// pas d'affichage pour les lignes pour lesquelles la quantité est 0	
					if ($_SESSION['quantite'][$i]>0) {
				?>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="../images/50x50.png" alt="" />
                        <span class="item-info">
                            <span><h4><?php echo $_SESSION['nom_famille'][$i]; ?></h4></span>
							<span><h4><?php echo $_SESSION['modele'][$i]; ?></h4></span>
                            <span>Prix: <?php echo $_SESSION['prix'][$i] . "€"; ?></span>
                        </span>
                    </span>
                </span>
              </li>
			  <?php
			  	} // Fin du if
			} // Fin du for
			  ?>
              <li role="separator" class="divider"></li>
              <li><a href="panier.php" class="text-center"><i class="fa fa-sign-out"></i> Voir Panier</a></li>
            </ul>
          </li>
          <?php if(!isset($_SESSION['identifiant'])){
            echo '<li><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".modal-connex">Connexion</button></li>';
          }else{
            echo '<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Mon Compte <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="dashboard.php"><i class="fa fa-tachometer"></i> Tableau de bord</a></li>
              <li><a href="histo_commande.php"><i class="fa fa-history"></i> Historique Commande</a></li>
              <li><a href="panier.php"><i class="fa fa-shopping-cart"></i> Panier <span class="badge">4</span></a></li>
              <li role="separator" class="divider"></li>
              <form class="text-center" action="" method="post">
                <li><button id="deconnexion" class="btn btn-default navbar-btn" name="deconnexion" type="submit"><i class="fa fa-sign-out"></i> Se Déconnecter</button></li>
              </form>
            </ul>
          </li>';
          }; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!-- Modal de connexion -->
<div class="modal-connex modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="Connexion">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
              <h4 class="modal-title" id="Connexion">Se connecter</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="connexHeaderForm" method="POST">
                              <div class="form-group">
                                  <label for="identifiantHeader" class="control-label">Identifiant</label>
                                  <input type="text" class="form-control" id="identifiantHeader" name="identifiantHeader" placeholder="example@gmail.com">
                              </div>
                              <div class="form-group">
                                  <label for="mot_de_passeHeader" class="control-label">Mot de passe</label>
                                  <input type="password" class="form-control" id="mot_de_passeHeader" name="mot_de_passeHeader">
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Se souvenir de moi
                                  </label>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Se connecter</button>
                              <a href="#">Mot de passe oublié?</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">S'inscrire maintenant, c'est <span class="text-success">GRATUIT</span> !</p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Voir toutes vos commandes</li>
                          <li><span class="fa fa-check text-success"></span> Sauvegardez vos favoris</li>
                          <li><span class="fa fa-check text-success"></span> Paiement en un click</li>
                          <li><span class="fa fa-check text-success"></span> Historique de commande</li>
                          <li><span class="fa fa-check text-success"></span> Obtenez un cadeau <small>(seulement pour les nouveaux comptes)</small></li>
                          <li><a href="#"><u>Plus de détails...</u></a></li>
                      </ul>
                      <p><a href="inscription.php" class="btn btn-info btn-block">S'inscrire maintenant!</a></p>
                  </div>
              </div>
          </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

