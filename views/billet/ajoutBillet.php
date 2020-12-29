<?php
include ("../../entities/billet.php");
include "../../core/billetC.php";


       
if ( isset($_POST['destination']) && isset($_POST['prix']) && isset($_POST['DateVoyage']) && isset($_POST['dispo']) ) 
{
  
  
  $destination=$_POST['destination'];
  
  $dispo="available";
  $prix=$_POST['prix'];
  $DateVoyage=$_POST['DateVoyage'];
  $dispo=$_POST['dispo'];

$billet=new billet($destination,0,$prix,$DateVoyage,$dispo);


$billetC=new billetC();
$billetC->ajouterbillet($billet);
 
header('Location: afficherB.php');


}
else 
{
  echo "verifier les champs";
}


?>

