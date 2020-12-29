<?php include "../../core/siegeC.php";
include ("../../entities/siege.php");
 $siege1C=new siegeC();
 $liste =$siege1C->affichersiege();

?>
	  <!DOCTYPE html>
 <html>
 <head
<title></title>
    
 </head>
 <body>
    <script>
        function verif() {
        
        if (document.getElementById("IdSiege").value=="") {
            alert("Tapez un id valable pour avoir une réponse.");
            document.getElementById("IdSiege").focus();
            return false;
        }
        if (document.getElementById("NumAllée").value=="") {
            alert("Pensez à chercher un num d allée exacte !");
            document.getElementById("NumAllée").focus();
            return false;

        }
        if (document.getElementById("NumRang").value=="") {
            alert("Pensez à taper une NumRang !");
            document.getElementById("NumRang").focus();
            return false;

        }
        if (document.getElementById("class").value=="") {
            alert("Pensez à taper un class!");
            document.getElementById("class").focus();
            return false;

        }
        
        
    }
    </script>
 	<div id="page-wraper">

   
    
	  <h1> resultat de la modification</h1>

	<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
                                                    <tr class="bg-primary">
                                                    <th></th>
                                                        <th>IdSiege</th>
                                                        <th>NumAllée</th>
                                                        <th>NumRang</th>
                                                        <th>class</th>
                                                        
                                                        
                                                        
                                                    </tr>
    
                                                    <?PHP



?>
    <?PHP
    if (isset($_POST['IdSiege_ini']))
    {
      $IdSiege=$_POST['IdSiege'];
      $NumAllée=$_POST['NumAllée'];
      $NumRang=$_POST['NumRang'];
      $class=$_POST['class'];
      
     
      
      $siege=new siege($NumAllée,$IdSiege,$NumRang,$class);
      $siegeC=new siegeC();
    
      $siegeC->modifiersiege($siege,$_POST['IdSiege']);
      
      
    }
                                        
            foreach($liste as $row){




    ?>
    <form class="card-body" action="modifierS.php"  method="POST" >
    <tr>
    <td>
      <input type="submit" value="edit" class="btn btn-sm btn-danger m-b-5 m-t-5" name="edit" >
      <input type="hidden" value="<?PHP echo $row['IdSiege']; ?>" name="IdSiege_ini" >
      </td>
    <td><input type="int" value="<?PHP echo $row['IdSiege']; ?>" name="IdSiege" id="IdSiege">; </td>
    <td><input type="int" value="<?PHP echo $row['NumAllee']; ?>"id="NumAllée"name="NumAllée">; </td>
    <td><input type="int" value="<?PHP echo $row['NumRang'] ;?>"id="NumRang"name="NumRang">; </td>
    <td><input type="text" value="<?PHP echo $row['class']; ?>"id="class" name="class">; </td>
    
    
    </tr>
    </form>
    <?php
}
         ?>    
                                                </table>
                                            

                            <?PHP


?>
                                                <?PHP



?>
                       
        <script src="assets/js/jquery.min.js"></script>

<!--popper js-->
<script src="assets/js/popper.js"></script>

<!--Tooltip js-->
<script src="assets/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Jquery star rating-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--mCustomScrollbar js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Sidemenu js-->
<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Scripts js-->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/accordiation.js"></script>
<script src="assets/js/jquery.showmore.js"></script>

</body>
	  </body>
	  </html>