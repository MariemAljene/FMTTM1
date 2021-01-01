 <?php
include "config.php";
/**
 * 
 */

 class siegeC 
{
    
function ajoutersiege($siege)
    { 
    $sql="INSERT INTO siege (NumAllee,NumRang,class) VALUES(:NumAllee,:NumRang,:class)";
    $db = config::getConnexion();
        try{

        $req=$db->prepare($sql);        
        $NumAllée=$siege->getNumAllée();
        
        $NumRang=$siege->getNumRang();
       
        $class=$siege->getclass();
        
        
        $req->bindValue(':NumAllee',$NumAllée);
        
        $req->bindValue(':NumRang',$NumRang);
        
        $req->bindValue(':class',$class);
        //$req->bindValue(':dispo',$dispo);
        
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }

   function affichersiege()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM siege";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $siege= $req->fetchALL();
        return $siege;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function affichersiege7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM siege order by class  DESC LIMIT 0,12 ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $siege= $req->fetchALL();
        return $siege;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimersiege($IdSiege){
        $sql="DELETE  from siege where IdSiege=:IdSiege";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':IdSiege',$IdSiege);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifiersiege($siege,$r){
        $sql="UPDATE siege SET  NumAllee=:NumAllee,NumRang=:NumRang,class=:class WHERE IdSiege=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);        
            $NumAllée=$siege->getNumAllée();
            $NumRang=$siege->getNumRang();
            $class=$siege->getclass();
          
           
             $req->bindValue(':r',$r);
             $req->bindValue(':NumAllee',$NumAllée);
             $req->bindValue(':NumRang',$NumRang);
           
             $req->bindValue(':class',$class);
            
             
            $req->execute();

        
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from siege where  class like '%$search_value%' or IdSiege like '%$search_value%' or NumRang like '%$search_value%'  or NumAllée like '%$search_value%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $siege= $req->fetchALL();
        return $siege;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.NumAllée= a.NumAllée";
        
       $db = config::getConnexion();
            $sql="SElECT * From siege ORDER BY IdSiege";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $siege= $req->fetchALL(PDO::FETCH_OBJ);
        return $siege;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>