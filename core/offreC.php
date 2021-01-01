<?php
include "config.php";
/**
 * 
 */

 class offreC 
{
	
function ajouteroffre($offre)
	{ 
 	$sql="INSERT INTO offre (code,pourcentage) VALUES(:code,:pourcentage)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $code=$offre->getcode();
        
        $pourcentage=$offre->getpourcentage();
        
		$req->bindValue(':code',$code);
		
		$req->bindValue(':pourcentage',$pourcentage);
		
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

   function afficheroffre()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM offre";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $offre= $req->fetchALL();
        return $offre;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficheroffre7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM offre order by class   ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $offre= $req->fetchALL();
        return $offre;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimeroffre($IdOffre){
        $sql="DELETE  from offre where IdOffre=:IdOffre";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':IdOffre',$IdOffre);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifieroffre($offre,$r){
        $sql="UPDATE offre SET  code=:code,pourcentage=:pourcentage WHERE IdOffre=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);		
            $code=$offre->getcode();
            $pourcentage=$offre->getpourcentage();
            
           
             $req->bindValue(':r',$r);
             $req->bindValue(':code',$code);
             $req->bindValue(':pourcentage',$pourcentage);
             
             
            $req->execute();

     
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from offre where  IdOffre like '%$search_value%' or pourcentage like '%$search_value%' or code like '%$search_value%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $offre= $req->fetchALL();
        return $offre;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.code= a.code";
        
       $db = config::getConnexion();
            $sql="SElECT * From offre ORDER BY IdOffre";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $offre= $req->fetchALL(PDO::FETCH_OBJ);
        return $offre;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>