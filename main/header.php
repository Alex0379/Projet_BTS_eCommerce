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
        <form class="navbar-form navbar-left" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Recherche...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-shopping-cart"></i> Panier <span class="badge">4</span><span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_1.jpg" alt="" />
                        <span class="item-info">
                            <span>Nom article</span>
                            <span>prix: 27$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-danger  fa fa-close"></button>
                    </span>
                </span>
              </li>
<li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_2.jpg" alt="" />
                        <span class="item-info">
                            <span>Nom article</span>
                            <span>prix: 3$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-danger  fa fa-close"></button>
                    </span>
                </span>
              </li>
                            <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_3.jpeg" alt="" />
                        <span class="item-info">
                            <span>Nom article</span>
                            <span>prix: 12$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-danger  fa fa-close"></button>
                    </span>
                </span>
              </li>
<li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_4.jpg" alt="" />
                        <span class="item-info">
                            <span>Nom article</span>
                            <span>prix: 7$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-danger  fa fa-close"></button>
                    </span>
                </span>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="panier.php" class="text-center"><i class="fa fa-sign-out"></i> Voir Panier</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Mon Compte <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="dashboard.php"><i class="fa fa-tachometer"></i> Tableau de bord</a></li>
              <li><a href="histo_commande.php"><i class="fa fa-history"></i> Historique Commande</a></li>
              <li><a href="panier.php"><i class="fa fa-shopping-cart"></i> Panier <span class="badge">4</span></a></li>
              <li role="separator" class="divider"></li>
              <form action="" method="post">
              <li><a href="#" id="deconnexion" name="deconnexion" type="submit"><i class="fa fa-sign-out"></i> Se Déconnecter</a></li>
            </ul>
          </li>
          <li><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".modal-connex">Connexion</button></li>
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
                          <form id="connexForm" method="POST" action="" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="identifiantHeader" class="control-label">Identifiant</label>
                                  <input type="text" class="form-control" id="identifiantHeader" name="identifiantHeader" value="" required="" title="Merci de rentrer votre identifiant" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="motdepasse" class="control-label">Mot de passe</label>
                                  <input type="password" class="form-control" id="motdepasse" name="motdepasse" value="" required="" title="Merci de rentrer votre mot de passe">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Identifiant ou mot de passe incorrect...</div>
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

<?php
require('../src/php/fonctions.php');

if(isset($_POST['identifiantHeader'])){
        // Récupération des valeurs
<<<<<<< HEAD
        $id_utilisateur=$_POST['identifiantConnex'];
        $motdepasse=$_POST['motdepasse'];
=======
        $id_utilisateur=$_POST['identifiant'];
        $motdepasse=$_POST['mot_de_passe'];
>>>>>>> origin/master
        
        // supprimer toutes les anciennes variables 
        session_unset();
        if(IdentifieUtilisateur($id_utilisateur, $motdepasse)){
            
            global $HTTP_HOST, $DOCROOT;
            
            $_SESSION['mot_de_passe'] = $motdepasse;
            $_SESSION['identifiant'] = $id_utilisateur;
            $_SESSION['nbr_articles'] = 0;
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }

// Récupération des valeurs boutons/déco
if(isset($_POST["deconnexion"])){
  SupprimeSession();
}
?>