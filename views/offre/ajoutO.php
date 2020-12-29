<?php
include ("../../entities/offre.php");
include "../../core/offreC.php";


       
if ( isset($_POST['code']) && isset($_POST['pourcentage'])  ) 
{
 
  $code=$_POST['code'];
  $pourcentage=$_POST['pourcentage'];
  
$offre=new offre(0,$code,$pourcentage);


$offreC=new offreC();
$offreC->ajouteroffre($offre);
 
header('Location: afficherO.php');


}
else 
{
  echo "verifier les champs";
}


?>

