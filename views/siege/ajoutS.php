<?php
include ("../../entities/siege.php");
include "../../core/siegeC.php";


       
if ( isset($_POST['NumAllée']) && isset($_POST['NumRang']) && isset($_POST['class'])  ) 
{
  
  
  $NumAllee=$_POST['NumAllée'];
  
  
  $NumRang=$_POST['NumRang'];
  $class=$_POST['class'];
  

$siege=new siege($NumAllee,0,$NumRang,$class);


$siegeC=new siegeC();
$siegeC->ajoutersiege($siege);
 
header('Location:afficherS.php');


}
else 
{
  echo "verifier les champs";
}


?>

