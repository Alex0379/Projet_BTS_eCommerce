<?php
  include('header.php');
  
  // Connexion à la base de données
  $idcom = connex($DB);
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
              <?php
  if(!empty($_POST)){ // Si au moins un filtre n'est pas vide...
    $req = 'SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `id_famille`, `id_marque`, `nb_coeur`
              FROM `article`
              WHERE ('; // initialisation de notre requête avec le SELECT
    foreach($_POST as $keyliste=>$liste){ // récupération des filtres
	  if(is_array($liste) && count($liste)>0) // si les filtres sont renseignés...
		foreach($liste as $val){ // récupération de chaque valeur de chaque filtre
		  $verif=trim($val); 
		  if(!empty($verif)){
			$req.= ' '.$keyliste.'="'.$verif.'" OR' ; // si les valeurs ne sont pas vide, on ajoute les conditions à notre requête
		  }
		}
		$req = rtrim($req,' OR'); // supression du dernier OR
		$req.=') AND (' ; // Ajout du AND pour la prochaine condition
    }
	$req = rtrim($req,'AND ( AND ()'); // suppression des AND
	$req .=')'; // On ferme notre dernière condition
	
	if(!empty($_POST['NbCoeurMin']) AND !empty($_POST['NbCoeurMax'])){ // Récupération des valeurs des RangeSliders si ils sont renseigné.
	  $req .=' AND ('.$_POST['NbCoeurMin'].' <= nb_coeur <= '.$_POST['NbCoeurMax'].')'; // Ajout des valeurs à notre requête
	}
	if(!empty($_POST['PrixMin']) AND !empty($_POST['PrixMax'])){
	  $req .=' AND ('.$_POST['PrixMin'].' <= prix <= '.$_POST['PrixMax'].')';
	}
    if(!empty($motcle)){ // Récupération du mot clé dans le header si la variable n'est pas vide
      $req = rtrim($req,')');
      $req .= $motcle; // Ajout à notre requête
    }
    if(isset($_POST["ajout_article"])){
      $req = rtrim($req,')');
      $req .= ' 1';
	  ajoutPanier();
	}
  }else{
	$req = 'SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `id_famille`, `id_marque`, `nb_coeur`
              FROM `article`'; // Si aucun filtre selectionner on envoie tous les articles
  }
?>
            <div class="col-md-3">
              <div class="formConteneur">
                <p class="lead">Filtres</p>
                <?php
                    echo '<form id="bootstrapSelectForm" method="post" action="" class="form-horizontal">';
                    echo '<div class="form-group">';
                    echo '<label class="control-label"><i class="fa fa-users"></i> Famille</label>';
                    echo '<div class="selectContainer">';
                            
                      $requete = "SELECT id_famille, nom_famille FROM `famille` ORDER BY `famille`.`nom_famille` ASC";
                        echo '<select id="triFamille" multiple="multiple" name="id_famille[]">';
                          $resultat = $idcom->query($requete) or die("Erreur requête");
                          while($donnees = $resultat->fetch()){
                ?>
                      <option value="<?php echo $donnees['id_famille']; ?>"><?php echo $donnees['nom_famille']; ?></option>
                        <?php
                          } // Fin du while
                            echo '</select>';
                        ?>
                        </div>
                      </div>
                      
                      <?php
                      echo '<div class="form-group">';
                      echo '<label class="control-label"><i class="fa fa-cogs"></i> Socket</label>';
                      echo '<div class="selectContainer">';
                      $requete = "SELECT DISTINCT socket FROM `article` ORDER BY `article`.`socket` ASC";
                            echo '<select id="triSocket" multiple="multiple" name="socket[]">';
                            $resultat = $idcom->query($requete) or die("Erreur requête");
                            while($donnees = $resultat->fetch()){
                      ?>
                                <option value="<?php echo $donnees['socket']; ?>"><?php echo $donnees['socket']; ?></option>
                      <?php
                            } // Fin du while
                            echo '</select>';
                      ?>
                        </div>
                      </div>
                        
                  <div class="form-group">
                    <label for="sliderNbCoeur"><i class="fa fa-heart"></i> Nombre de coeurs</label>
                    <div id="sliderNbCoeur" name="sliderNbCoeur"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sliderFreq"><i class="fa fa-heartbeat"></i> Fréquence - (GHz)</label>
                    <div id="sliderFreq" name="sliderFreq"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sliderPrix"><i class="fa fa-eur"></i> Prix - (Euro)</label>
                    <div id="sliderPrix" name="sliderPrix"></div>
                  </div>
                    
                  <div class="form-group">
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Appliquer les filtres</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../images/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/800x300.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                  
                  <?php
                  $articlesParPages=30; // Nous allons afficher 30 articles par page.
                  $retourReq = ""; // initialisation de la variable
                  $retourReq = $req; // récupération de la requête
                  $retourReq = ltrim($retourReq,'SELECT `id_article`, `modele`, `date_commercialisation`, `prix`, `id_famille`, `id_marque`, `nb_coeur` '); // supression du SELECT
                  $retourReqTotal = 'SELECT COUNT(*) AS total '; // Ajout d'un SELECT COUNT afin de récupérer le nombre de résultat de la requête
                  $retourReqTotal .= $retourReq; // Ajout de la requête
                  // echo $retourReqTotal;
                  $retour_total=$idcom->query($retourReqTotal) or die("erreur requête"); //Nous récupérons le contenu de la requête dans $retour_total
                  $donnees_total=$retour_total->fetch(PDO::FETCH_ASSOC); //On range retour sous la forme d'un tableau.
                  $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
                   
                  //Nous allons maintenant compter le nombre de pages.
                  $nombreDePages=ceil($total/$articlesParPages);
                   
                  if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
                  {
                       $pageActuelle=intval($_GET['page']);
                   
                       if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
                       {
                            $pageActuelle=$nombreDePages;
                       }
                  }
                  else // Sinon
                  {
                       $pageActuelle=1; // La page actuelle est la n°1    
                  }
                  
					$premiereEntree=($pageActuelle-1)*$articlesParPages; // On calcul la première entrée à lire
 
                    // La requête sql pour récupérer les messages de la page actuelle.
                    $retour_articles=$idcom->query($req .=' LIMIT '.$premiereEntree.', '.$articlesParPages.'') or die("erreur requête");
                    
                   $succesRecherche="NO"; // initialisation de la variable
								while($donnees = $retour_articles->fetch()){ // récupération des données de la requête
								  $id_famille = $donnees['id_famille'];
								  $id_article = $donnees['id_article'];
								  $modele = $donnees['modele'];
								  $id_marque = $donnees['id_marque'];
								  $prix = $donnees['prix'];
								  $dateCommercialisation = $donnees['date_commercialisation'];
								  $succesRecherche="YES"; // Si il y a des articles on passe la variable à YES	
					?>
                    
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/320x150.png" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $prix; ?>€</h4>
                                    <h4><a href="description_Article.php"><?php
                                    // Sous requête pour récupérer le nom_famille
									$resultatFamille = $idcom->query('SELECT `nom_famille`
																FROM  `famille`
																WHERE `id_famille` = '.$id_famille) or die("Erreur requête");
									while($donneesFamille = $resultatFamille->fetch()){
									  $famille = $donneesFamille['nom_famille'];
									  if($famille == "anonyme"){ // Condition pour ne pas afficher anonyme lorque la famille est inconnu
                                                                                  echo $modele;
                                                                                }else{
                                                                                  echo $famille . "<br>" . $modele;
                                                                                }
																				
									}?></a></h4>
                                    <p>Produit de la marque <?php
                                    // Sous requête pour récupérer le nom_marque
									$resultatMarque = $idcom->query('SELECT `nom_marque`
																FROM  `marque`
																WHERE `id_marque` = '.$id_marque) or die("Erreur requête");
									while($donneesMarque = $resultatMarque->fetch()){
									  $marque = $donneesMarque['nom_marque'];
									  echo $marque; ?> et commercialisé le <?php echo $dateCommercialisation;
									}?>.</p>
                                </div>
                                <form method="post" action="index.php">
                                  <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                          <button name="ajout_article" type="submit" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Ajouter</button>
                                        </p>
                                        <p class="btn-details">
                                          <a href="description_Article.php?id_article=<?php echo $id_article; ?>" class="btn btn-default"><i class="fa fa-list"></i>Détails</a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input type="hidden" name="id_article_choisi" value="<?php echo $id_article; ?>">
                                  </div>
                                </form>
                              </div>
                               
                        </div>
                        
					
                    
                    <?php
								} // Fin de la boucle while
							
							if($succesRecherche=="NO") // Si aucun retour d'article...
							{
								echo "<h1 class='text-center'> Aucun article identifié.</h1>";
                            }
							?>
                  
                </div>
          
            <div class="row">
              <div class="col-md-12 text-center">
                <nav>
                  <ul class="pagination">
                    <li class="disabled">
                      <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                    </li>
                    
                      <?php
                        for($i=1; $i<=$nombreDePages; $i++){
                          // Condition pour le nombre de page à renvoyer
                          if($i==$pageActuelle){
                      ?>
                      <li class="active">
                        <a href="#"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
                      </li>
                      <?php
                          }	// Fin if
                          else{
                      ?>
                        <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php
                          } // Fin else
                     } // Fin For
                      ?>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
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