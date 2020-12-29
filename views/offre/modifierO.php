<?php include "../../core/offreC.php";
include ("../../entities/offre.php");
 $offre1C=new offreC();
 $liste =$offre1C->afficheroffre();

?>
	  <!DOCTYPE html>
 <html>
 <head
<title></title>
    
 </head>
 <body>
    <script>
        function verif() {
        
        if (document.getElementById("IdOffre").value=="") {
            alert("Tapez un id valable pour avoir une réponse.");
            document.getElementById("IdOffre").focus();
            return false;
        }
        if (document.getElementById("code").value=="") {
            alert("Pensez à chercher une date exacte !");
            document.getElementById("code").focus();
            return false;

        }
        if (document.getElementById("pourcentage").value=="") {
            alert("Pensez à taper une pourcentage !");
            document.getElementById("pourcentage").focus();
            return false;

        }
       
        
        
        }
    }
    </script>
 	<div id="page-wraper">

   
    
	  <h1> resultat de la modification</h1>

	<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
                                                    <tr class="bg-primary">
                                                    <th></th>
                                                        <th>IdOffre</th>
                                                        <th>code</th>
                                                        <th>pourcentage</th>
                                                        
                                                        
                                                        
                                                    </tr>
    
                                                    <?PHP



?>
    <?PHP
    if (isset($_POST['IdOffre_ini']))
    {
      $IdOffre=$_POST['IdOffre'];
      $code=$_POST['code'];
      $pourcentage=$_POST['pourcentage'];
      
      
      $offre=new offre($IdOffre,$code,$pourcentage);
      $offreC=new offreC();
    
      $offreC->modifieroffre($offre,$_POST['IdOffre']);
      
      
    }
                                        
            foreach($liste as $row){




    ?>
    <form class="card-body" action="modifierO.php"  method="POST" >
    <tr>
    <td>
      <input type="submit" value="edit" class="btn btn-sm btn-danger m-b-5 m-t-5" name="edit" >
      <input type="hidden" value="<?PHP echo $row['IdOffre']; ?>" name="IdOffre_ini" >
      </td>
    <td><input type="int" value="<?PHP echo $row['IdOffre']; ?>" name="IdOffre" id="IdOffre">; </td>
    <td><input type="int" value="<?PHP echo $row['code']; ?>"id="code"name="code">; </td>
    <td><input type="int" value="<?PHP echo $row['pourcentage'] ;?>"id="pourcentage"name="pourcentage">; </td>
   
    
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