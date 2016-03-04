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
        $requete="select * from client where id_client='$utilisateur'";
            if(!($resultat = $idcom->query($requete))){
                AfficheMessErr(sprintf("Erreur interne %d:%s\n"));
                return 0;
            }
            
            if(($ligne = $resultat->fetch()) && ($motdepasse == $ligne["motdepasse"] && $motdepasse != ""))
                return 1;
            else
                return 0;
    }
    
    // fonction SupprimeSession()
    function SupprimeSession(){
        // Supprimer toutes les variable de session 
        session_unset();
        
        //Détruire la session elle-même
        session_destroy();
    }

    // Fonction ajoutPanier()
	function ajoutPanier()
	{
		global $DB;
		// Récupération des articles (valeurs renvoyées par les boutons).
		$id_article = $_POST["id_article_choisi"];
		
		// Nouvelle requête pour récupérer les informations détaillées des articles.
			// Connexion à la base de données.
			$idcom = connex($DB);
            
            $sql = "SELECT * FROM `articles` WHERE id_article = '$id_article'";
			
			// Lancement de la requête.
			$resultat=$idcom->query($sql) or die("erreur requête");
			while ($donnees = $resultat->fetch())
			{
				$modele = $donnees["modele"];
				$prix=$donnees["prix"];
			}
		
		// Mise en place d'un drapeau
		$present=false;
		
		for($i=0; $i<$_SESSION["nbr_articles"]; $i++)
		{
			if($_SESSION["id_article"][$i] == $id_article)
			{
				$present=true;
			}
		}
		
		if ($present)
			{
				echo "<h3>Cet article est déjà présent dans votre panier. Vous avez la possibilité de modifier la quantité en affichant celui-ci.</h3>";
			}
		else
		// SESSION on place ces variables dans des variables de session.
			{
				$_SESSION["id_article"][]=$id_article;
				$_SESSION["famille"][]=$famille;
				$_SESSION["modele"][]=$modele;
				$_SESSION["nb_coeur"][]=$nb_coeur;
                $_SESSION["socket"][]=$socket;
				$_SESSION["prix"][]=$prix;
				$_SESSION["quantite"][]=1; // Quantité toujours fixée à 1 par défaut pour l'article sélectionné.
				$_SESSION["nbr_articles"]++; // Incrémentation de la quantité d'articles.
				echo "<h3>L'article suivant a été ajouté à votre panier électronique...</h3>";
			}
	}
?>