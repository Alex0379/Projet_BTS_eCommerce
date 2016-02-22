<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Titre du Site</title>
    <link href="../src/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
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
        <a class="navbar-brand" href="#">E - Processor</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Index <span class="sr-only">(current)</span></a></li>
          <li><a href="#">A propos</a></li>
          <li><a href="#">Nous Contacter</a></li>
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
          <li><a href="#"><i class="fa fa-shopping-cart"></i> Panier</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Mon Compte <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-tachometer"></i> Tableau de bord</a></li>
              <li><a href="#"><i class="fa fa-history"></i> Historique Commande</a></li>
              <li><a href="#"><i class="fa fa-shopping-cart"></i> Panier</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Se Déconnecter</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>