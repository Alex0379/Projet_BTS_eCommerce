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
        $requete="select * from profil_utilisateur where id_utilisateur='$utilisateur'";
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
?>