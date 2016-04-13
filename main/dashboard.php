<?php
include('header.php');

// Connexion à la base de données
  $idcom = connex($DB);
  
  $id_client = $_SESSION['identifiant'];
  
// Requête sql
  $sql = "SELECT prenom, nom FROM client WHERE identifiant='$id_client'";

?>



<!-- Intégration du css -->
<link href="../src/css/dashboard.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="15">15</span>
                                </div>
                                <div class="desc"> Historique Commande </div>
                            </div>
                        <a class="more" href="histo_commande.php"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="<?php echo $_SESSION['nbr_articles']; ?>"><?php echo $_SESSION['nbr_articles']; ?></span>
                            </div>
                            <div class="desc"> Article Panier </div>
                        </div>
                        <a class="more" href="panier.php"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup"> <?php
                                
                                $resultat = $idcom->query($sql) or die("Erreur requête");
                                while($donnees = $resultat->fetch()){
                                        echo $donnees["prenom"] . " " . $donnees["nom"];
                                }?> </span></div>
                            
                            <div class="desc"> Profil </div>
                        </div>
                        <a class="more" href="profil.php"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Articles recommandés</h3>
                                </div>
                                <div class="col-md-3">
                                    <!-- Contrôles -->
                                    <div class="controls pull-right hidden-xs">
                                        <a class="left fa fa-chevron-left btn" href="#carousel-example" data-slide="prev"></a>
                                        <a class="right fa fa-chevron-right btn" href="#carousel-example" data-slide="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                                <!-- Wrapper pour slides -->
                                <div class="carousel-inner">
                                    
                                    <div class="item active"><!-- Articles visible (4 max) -->
                                        <div class="row">
                                            <?php
                                            
                                            for ($i = 0; $i < 4; $i++) {
                                            $sql1 = "SELECT id_article, prix, id_famille FROM article JOIN ( SELECT FLOOR( COUNT( * ) * RAND( ) ) AS ValeurAleatoire FROM article ) AS V ON article.id_article = V.ValeurAleatoire";
                                            
                                            $resultat = $idcom->query($sql1) or die("Erreur requête");
                                                while($donnees = $resultat->fetch()){
                                            ?>
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5><?php echo "REF". $donnees["id_article"] . "PI" . $donnees["id_famille"];?></h5>
                                                                <h5 class="price-text-color"><?php echo $donnees["prix"] . "€";?></h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="../images/250x200.png" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                              <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                                            </p>
                                                            <p class="btn-details">
                                                              <i class="fa fa-list"></i><a href="description_Article.php?id_article=<?php echo $donnees["id_article"]; ?>" class="hidden-sm">Détails</a>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Article -->
                                        <?php
                                                } // Fin boucle while
                                        } // Fin boucle for ?>
                                            
                                        </div>
                                    </div><!-- Fin Articles visible -->
                                    
                                    <div class="item"><!-- Articles caché (4 max) -->
                                        <div class="row">
                                            <?php
                                            
                                            for ($i = 0; $i < 4; $i++) {
                                            $sql1 = "SELECT id_article, prix, id_famille FROM article JOIN ( SELECT FLOOR( COUNT( * ) * RAND( ) ) AS ValeurAleatoire FROM article ) AS V ON article.id_article = V.ValeurAleatoire";
                                            
                                            $resultat = $idcom->query($sql1) or die("Erreur requête");
                                                while($donnees = $resultat->fetch()){
                                            ?>
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5><?php echo "REF". $donnees["id_article"] . "PI" . $donnees["id_famille"];?></h5>
                                                                <h5 class="price-text-color"><?php echo $donnees["prix"] . "€";?></h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="../images/250x200.png" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                              <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                                            </p>
                                                            <p class="btn-details">
                                                              <i class="fa fa-list"></i><a href="description_Article.php?id_article=<?php echo $donnees["id_article"]; ?>" class="hidden-sm">Détails</a>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Article -->
                                        <?php
                                                } // Fin boucle while
                                        } // Fin boucle for ?>
                                        
                                        </div>
                                    </div><!-- Fin Articles caché -->
                                    
                                </div>
                            </div>
                        </div>
            
        </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>