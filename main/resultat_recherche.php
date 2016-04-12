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

            <div class="col-md-9">

                <div class="row">
                  
                  <?php
					// Récupération des saisies
                    /*$motcle= $_POST['motcle'];        */           // $motcle contient le texte à rechercher
                    $famille_processeur= $_POST['famille_processeur'];    // $categorie contient le domaine de la recherche
                    
                    // Connexion à la base de données
                    $idcom = connex($DB);
				
                    // Déclaration des requêtes                    
                    $requete1="";
                    $requete2="";
                    $requete3="";
                      
                    switch ($famille_processeur) {
					case "intelCeleron":
						$requete1 = "SELECT article.id_article, article.modele FROM article, famille
                        WHERE famille.id_famille=article.id_famille AND famille.nom_famille LIKE '%Celeron%' ";
						break;
                    }
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
                        <div>
                            <div>
                                <p><?php echo $donnees["id_article"];?> <?php echo $donnees["modele"];
                                            }
                                            }?>
                                </p>
                            </div>
                            
                        </div>
					</form>
                  
                  
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