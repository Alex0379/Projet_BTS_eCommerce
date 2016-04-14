<?php 
    require 'commun.inc.php';
    
    // fonction Connex()
    function connex($base){
        global $DB_SERVER, $HTTP_HOST, $DB_LOGIN, $DB_PASSWORD, $DB, $DOCROOT;
        try{
            $idcom = new PDO('mysql:host='.$DB_SERVER.';dbname='.$DB.';charset=utf8', $DB_LOGIN, $DB_PASSWORD);
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $idcom;
    }
    
    // fonction IndentifieUtilisateur()
    function IdentifieUtilisateur($utilisateur, $motdepasse){
        global $DB_SERVER, $HTTP_HOST, $DB_LOGIN, $DB_PASSWORD, $DB, $DOCROOT;
        
        // Ouvre une connexion avec le serveur MySQL 
        if(!($idcom = connex($DB))){
            AfficheMessErr(sprintf("Erreur interne %d:%s\n"));
            return 0;
        }
        
        // Effectuer l'identification utilisateur / mot de passe 
        $requete="select * from client where identifiant='$utilisateur'";
            if(!($resultat = $idcom->query($requete))){
                AfficheMessErr(sprintf("Erreur interne %d:%s\n"));
                return 0;
            }
            
            if(($ligne = $resultat->fetch()) && ($motdepasse == $ligne["mot_de_passe"] && $motdepasse != ""))
                return 1;
            else
                return 0;
    }
    
    // fonction SupprimeSession()
    function SupprimeSession(){
		global $HTTP_HOST, $DOCROOT;
		
        // Supprimer toutes les variable de session 
        session_unset();
        
        //Détruire la session elle-même
        session_destroy();
    }

    // Fonction ajoutPanier()
	function ajoutPanier()
	{
		global $DB, $HTTP_HOST, $DOCROOT;
		// Récupération des articles (valeurs renvoyées par les boutons).
		$id_article = $_POST["id_article_choisi"];
		
		unset($_POST); // on élimine $_post
		// Nouvelle requête pour récupérer les informations détaillées des articles.
			// Connexion à la base de données.
			$idcom = connex($DB);
            
            $sql = "SELECT `id_article`, `modele`, `frequence`, `jeux_instruction`, `tension`, `socket`, `nb_coeur`, `prix`, `nom_marque`, `nom_famille`, a.id_famille AS idFamille
				FROM `article` AS a, `famille` AS f, `marque` AS m
				WHERE a.`id_marque` = m.`id_marque` AND a.`id_famille` = f.`id_famille` AND a.`id_article` = '$id_article'";
			
			// Lancement de la requête.
			$resultat=$idcom->query($sql) or die("erreur requête");
			while ($donnees = $resultat->fetch())
			{
				$modele = $donnees["modele"];
				$prix=$donnees["prix"];
				$idFamille = $donnees['idFamille'];
				$famille = $donnees['nom_famille'];
				$marque = $donnees['nom_marque'];
				$nb_coeur = $donnees['nb_coeur'];
				$socket = $donnees['socket'];
				$tension = $donnees['tension'];
				$jeux_instruction = $donnees['jeux_instruction'];
				$frequence = $donnees['frequence'];
			}
		
		// Mise en place d'un drapeau
		$present=false;
		
		if(!isset($_SESSION['nbr_articles'])){
				$_SESSION['nbr_articles'] = 0;
			}
		
		for($i=0; $i<$_SESSION["nbr_articles"]; $i++)
		{
			if($_SESSION["id_article"][$i] == $id_article)
			{
				$present=true;
			}
		}
		
		if ($present)
			{
				echo "<script>
				$(document).ready(function() {
					$(function(){
						PNotify.prototype.options.styling = 'bootstrap3';
						new PNotify({
							title: 'Article déjà présent',
							text: 'Vous avez la possibilité de modifier la quantité en affichant celui-ci.',
							type: 'error'
						});
					});
				});
				</script>";
			}
		else
		// SESSION on place ces variables dans des variables de session.
			{
				$_SESSION["id_article"][]=$id_article;
				$_SESSION["id_famille"][]=$idFamille;
				$_SESSION["nom_famille"][]=$famille;
				$_SESSION["marque"][]=$marque;
				$_SESSION["modele"][]=$modele;
				$_SESSION["frequence"][]=$frequence;
				$_SESSION["jeux_instruction"][]=$jeux_instruction;
				$_SESSION["tension"][]=$tension;
				$_SESSION["nb_coeur"][]=$nb_coeur;
                $_SESSION["socket"][]=$socket;
				$_SESSION["prix"][]=$prix;
				$_SESSION["quantite"][]=1; // Quantité toujours fixée à 1 par défaut pour l'article sélectionné.
				$_SESSION["nbr_articles"]++; // Incrémentation de la quantité d'articles.
				header("Location:http://$HTTP_HOST/$DOCROOT/panier.php");
				echo "<script>
				$(document).ready(function() {
					$(function(){
						PNotify.prototype.options.styling = 'bootstrap3';
						new PNotify({
							title: 'Bravo',
							text: 'L\'article suivant a été ajouté à votre panier électronique.',
							type: 'success'
						});
					});
				});
				</script>";
			}
	}
?>