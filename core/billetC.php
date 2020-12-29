<?php
include "config.php";
/**
 * 
 */

 class billetC 
{
	
function ajouterbillet($billet)
	{ 
 	$sql="INSERT INTO billet (destination,prix,DateVoyage,dispo) VALUES(:destination,:prix,:DateVoyage,:dispo)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $destination=$billet->getdestination();
        
        $prix=$billet->getprix();
        $dispo="available";
        $DateVoyage=$billet->getDateVoyage();
        $dispo=$billet->getdispo();
        
		$req->bindValue(':destination',$destination);
		
		$req->bindValue(':prix',$prix);
		$req->bindValue(':dispo',$dispo);
		$req->bindValue(':DateVoyage',$DateVoyage);
	    //$req->bindValue(':dispo',$dispo);
		
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

   function afficherbillet()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM billet";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $billet= $req->fetchALL();
        return $billet;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherbillet7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM billet order by destination  DESC LIMIT 0,12 ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $billet= $req->fetchALL();
        return $billet;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimerbillet($IdBillet){
        $sql="DELETE  from billet where IdBillet=:IdBillet";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':IdBillet',$IdBillet);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
function reserver($r){
        $sql="UPDATE billet SET  dispo=0 WHERE IdBillet=:r";


        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);        
           
           
             $req->bindValue(':r',$r);
           
            
              
            $req->execute();

               
       
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }

function modifierbillet($billet,$r){
        $sql="UPDATE billet SET  destination=:destination,prix=:prix,DateVoyage=:DateVoyage,dispo=:dispo WHERE IdBillet=:r";


        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);		
            $destination=$billet->getdestination();
            $prix=$billet->getprix();
            $dispo=$billet->getdispo();
            $DateVoyage=$billet->getDateVoyage();
          
           
             $req->bindValue(':r',$r);
             $req->bindValue(':destination',$destination);
             $req->bindValue(':prix',$prix);
             $req->bindValue(':dispo',$dispo);
             $req->bindValue(':DateVoyage',$DateVoyage);
            
              
            $req->execute();

               
       
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


function recherche($r){
        $db = config::getConnexion();
            $sql="select * from billet where dispo=1 and DateVoyage=:r";

        try{
            
        $req=$db->prepare($sql);
        $req->bindValue(':r',$r); 
        
        $req->execute();
        $billet= $req->fetchALL();
        return $billet;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.destination= a.destination";
        
       $db = config::getConnexion();
            $sql="SElECT * From billet ORDER BY IdBillet";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $billet= $req->fetchALL(PDO::FETCH_OBJ);
        return $billet;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>