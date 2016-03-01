<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord - Admin</title>

    <!-- Intégration CSS -->
    <link href="../../src/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../src/css/header_footer_admin.css" rel="stylesheet">
    <link href="../../src/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    
    <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    E-Processor - Mode Admin
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-tachometer"></i> Tableau de bord</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-line-chart"></i> Statistique</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

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
        <a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><i class="fa fa-bars"></i></a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Mon Compte <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="dashboard.php"><i class="fa fa-tachometer"></i> Tableau de bord</a></li>
              <li><a href="histo_commande.php"><i class="fa fa-history"></i> Historique Commande</a></li>
              <li><a href="panier.php"><i class="fa fa-shopping-cart"></i> Panier <span class="badge">4</span></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Se Déconnecter</a></li>
            </ul>
          </li>
          <li><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".modal-connex">Connexion</button></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>