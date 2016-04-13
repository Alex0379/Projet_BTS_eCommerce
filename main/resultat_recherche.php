<?php
  include('header.php');
  
  // Connexion à la base de données
  $idcom = connex($DB);
  
  // Requête sql
  $sql = "SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `nom_marque`, `nom_famille`
            FROM `article` AS a, `famille` AS f, `marque` AS m
            WHERE a.`id_marque` = m.`id_marque` AND a.`id_famille` = f.`id_famille`";
?>

    <link href="../src/bootstrap-3.3.6-dist/css/bootstrap-multiselect.css" rel="stylesheet">
    <link href="../src/css/iThing.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.min.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.theme.min.css" rel="stylesheet">
    <link href="../src/css/index.css" rel="stylesheet">

    <!-- Page Content -->
    <main class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="row">
                  
                  <?php
					// Récupération des saisies
                    $idFamille = $_POST['famille_processeur'];
                    $idSockets = $_POST['tri_socket'];
                    $idMotCle = $_POST['motCle'];
                    
                    // Connexion à la base de données
                    $idcom = connex($DB);
                    
                    // Déclaration des requêtes
                    $requete1="SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `nom_marque`, `nom_famille`
                                FROM `article` AS a, `famille` AS f, `marque` AS m
                                WHERE a.`id_marque` = m.`id_marque` AND a.`id_famille` = f.`id_famille` AND a.`id_famille` = $idFamille";
                                
                    $requete2="SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `nom_marque`, `nom_famille`
                                FROM `article` AS a, `famille` AS f, `marque` AS m
                                WHERE a.`nom_famille` LIKE '%$idMotCle%'";
                    $requete3="";
                    
                    
                    
				  ?>
                  
                  <?php
							// Définir le recherche comme négative si aucun article n'a pu être identifié.
							$succesRecherche="NO";
							
							// Exécuter la recherche non NULL.
							for($i=1; $i<=3; $i++) {
								$requete="requete"."$i";
								if($$requete == "") {
									continue;	// Sauter les requêtes NULL
								}
								$resultat = $idcom->query($$requete) or die("Erreur requête");
								while($donnees = $resultat->fetch())
								{
									$succesRecherche="YES";								
					?>
                    
                    <form method="post" action="">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/320x150.png" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $donnees['prix']; ?>€</h4>
                                    <h4><a href="description_Article.php"><?php if($donnees['nom_famille'] == "anonyme"){ // Condition pour ne pas afficher anonyme lorque la famille est inconnu
                                                                                  echo $donnees['modele'];
                                                                                }else{
                                                                                  echo $donnees['nom_famille'] . "<br>" . $donnees['modele'];
                                                                                } ?></a></h4>
                                    <p>Produit de la marque <?php echo $donnees['nom_marque']; ?> et commercialisé le <?php echo $donnees['date_commercialisation']; ?>.</p>
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                          <i class="fa fa-shopping-cart"></i><a href="#" name="ajout_article" type="submit" class="hidden-sm">Ajouter</a>
                                        </p>
                                        <p class="btn-details">
                                          <i class="fa fa-list"></i><a href="description_Article.php" class="hidden-sm">Détails</a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input type="hidden" name="id_article_choisi" value="<?php echo $donnees['id_article']; ?>">
                                </div>
                            </div>
                        
                        </div>
                        
					</form>
                    
                    <?php
								} // Fin de la boucle while
							} // Fin de la boucle for
							
							if($succesRecherche=="NO")
							{
								echo "<h4> Aucun article identifié.</h4>";
							}
							
							if(isset($_POST["ajoutArticle"]))
							{
								ajoutPanier();
							}
							?>
                  
                </div>
          
          </div>
          
        </div>

    </main>
    <!-- /.container -->

    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap-multiselect.js"></script>
    <script src="../src/javascript/lib/jquery.mousewheel.min.js"></script>
    <script src="../src/javascript/lib/jquery-ui.min.js"></script>
    <script src="../src/javascript/jQRangeSlider-min.js"></script>
    <script src="../src/javascript/index.js"></script>
    
<?php
  include('footer.php')
?>