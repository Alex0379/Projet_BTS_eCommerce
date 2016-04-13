<?php
include('header.php');

  // Connexion à la base de données
  $idcom = connex($DB);
  
  $idArticle = $_GET["id_article"];
  
  // Requête sql
  $sql = "SELECT `id_article`, `modele`, `nom_de_code`, `plateforme`, `frequence`, `nb_transistor`, `gravure`, a.`id_famille`,
        `jeux_instruction`, `tension`, `socket`, `nb_coeur`, `date_commercialisation`, `prix`, `nom_marque`, `nom_famille`
            FROM `article` AS a, `famille` AS f, `marque` AS m
            WHERE a.`id_marque` = m.`id_marque` AND a.`id_famille` = f.`id_famille` AND a.`id_article` = $idArticle";
?>

<!-- Intégration du css -->
<link href="../src/css/description_Article.css" rel="stylesheet">
    
<!-- Corps -->
<main class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-sm-6">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../images/350x250.png">
                            </div>
                            <div class="item">
                                <img src="../images/350x250.png">
                            </div>
                            <div class="item">
                                <img src="../images/350x250.png">
                            </div>
                            <div class="item">
                                <img src="../images/350x250.png">
                            </div>
                        </div>
                    </div> 
                <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../images/350x250.png"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../images/350x250.png"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../images/350x250.png"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../images/350x250.png"></div>
                            </div><!-- /item -->
                        </div><!-- /carousel-inner -->
                    </div> <!-- /thumbcarousel -->
                </div><!-- /clearfix -->
                </div> <!-- /col-sm-6 -->
                
                <?php
                    
                    $resultat = $idcom->query($sql) or die("Erreur requête");
					while($donnees = $resultat->fetch()){
					  $succesRecherche="YES";
                      
                      // Création des variables de données
                      $idArticle = $donnees["id_article"];
                      $idFamille = $donnees["id_famille"];
                      $nomCode = $donnees["nom_de_code"];
                      $plateforme = $donnees["plateforme"];
                      $frequence = $donnees["frequence"];
                      $nbTransistor = $donnees["nb_transistor"];
                      $jeuxInstruction = $donnees["jeux_instruction"];
                      $tension = $donnees["tension"];
                      $socket = $donnees["socket"];
                      $nbCoeur = $donnees["nb_coeur"];
                      $gravure = $donnees["gravure"];
                      $prix = $donnees['prix'];
                      $famille = $donnees['nom_famille'];
                      $modele = $donnees['modele'];
                      $marque = $donnees['nom_marque'];
                      $dateCommercialisation = $donnees['date_commercialisation'];
                    
                ?>
                
                <div class="col-sm-6">
                    <h2><?php echo $famille . " " . $modele; ?></h2>
                    <p> Processeur de la marque <?php echo $marque; ?> avec une fréquence de <?php echo $tension; ?>KHz et <?php echo $nbCoeur ?> coeur(s) reste un
                    incontournable de chez <?php echo $marque; ?>.<br/>
                    Commercialisé en <?php echo $dateCommercialisation;?> son prix reste tout à fait raisonnable.</p>
                    <div class="quantiteArticle">
                        <div class="center">
                            <h1><?php echo $prix; ?>€</h1>
                            <p>Quantité</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div> <!-- /col-sm-6 -->
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Ajouter au panier</button>
                        </div>
                    </div>
              </div> <!-- /row -->
            
        </div>
            <div class="col-sm-12">
                <div class="description_Complete">
                <h2>Description de l'article</h2>
                <table class="table table-hover">
                    <tr>
                        <td>
                            Référence
                        </td>
                        <td>
                            REF<?php echo $idArticle; ?>PI<?php echo $idFamille;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fabricant
                        </td>
                        <td>
                            <?php echo $marque; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Famille
                        </td>
                        <td>
                            <?php echo $famille; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Modèle
                        </td>
                        <td>
                            <?php echo $modele; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nom de code
                        </td>
                        <td>
                            <?php echo $nomCode; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fréquence
                        </td>
                        <td>
                            <?php echo $frequence; ?>KHz
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tension
                        </td>
                        <td>
                            <?php echo $tension; ?>V
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Socket
                        </td>
                        <td>
                            <?php echo $socket; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Plateforme
                        </td>
                        <td>
                            <?php echo $plateforme; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Coeurs
                        </td>
                        <td>
                            <?php echo $nbCoeur; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre de transistor
                        </td>
                        <td>
                            <?php echo $nbTransistor; ?> transistors
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gravure
                        </td>
                        <td>
                            <?php echo $gravure; ?>nanomètres
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jeux d'instruction
                        </td>
                        <td>
                            <?php echo $jeuxInstruction; ?>bits
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date de commercialisation
                        </td>
                        <td>
                            <?php echo $dateCommercialisation; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prix
                        </td>
                        <td>
                            <?php echo $prix; ?>€
                        </td>
                    </tr>
                </table>  
            </div>
            </div> <!-- /col-sm-12 -->
    </div>
    <?php } // Fin de la boucle while ?>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/javascript/description_Article.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>