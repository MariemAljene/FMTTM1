
<?php include "../../core/billetC.php";
include ("../../entities/billet.php");
 $billet1C=new billetC();
 $liste =$billet1C->afficherbillet();

?>
	  <!DOCTYPE html>
 <html>
 <head
<title></title>
    
 </head>
 <body>
    <script>
        function verif() {
        
        if (document.getElementById("IdBillet").value=="") {
            alert("Tapez un id valable pour avoir une réponse.");
            document.getElementById("IdBillet").focus();
            return false;
        }
        if (document.getElementById("DateVoyage").value=="") {
            alert("Pensez à chercher une date exacte !");
            document.getElementById("DateVoyage").focus();
            return false;

        }
        if (document.getElementById("destination").value=="") {
            alert("Pensez à taper une destination !");
            document.getElementById("destination").focus();
            return false;

        }
        if (document.getElementById("prix").value=="") {
            alert("Pensez à taper un prix!");
            document.getElementById("prix").focus();
            return false;

        }
        if (document.getElementById("dispo").value=="") {
            alert("dispo logique (0/1)!");
            document.getElementById("dispo").focus();
            return false;

        
        
        }
    }
    </script>
 	<div id="page-wraper">

   
    
	  <h1> resultat de la modification</h1>

	<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
                                                    <tr class="bg-primary">
                                                    <th></th>
                                                        <th>IdBillet</th>
                                                        <th>DateVoyage</th>
                                                        <th>destination</th>
                                                        <th>prix</th>
                                                        <th>dispo</th>
                                                        
                                                        
                                                    </tr>
    
                                                    <?PHP



?>
    <?PHP
    if (isset($_POST['IdBillet_ini']))
    {
      $IdBillet=$_POST['IdBillet'];
      $DateVoyage=$_POST['DateVoyage'];
      $destination=$_POST['destination'];
      $prix=$_POST['prix'];
      
      $dispo=0;
 
   $billet=new billet($destination,$IdBillet,$prix,$DateVoyage,$dispo);
      $billetC=new billetC();

      $billetC->modifierbillet($billet,$_POST['IdBillet']);

   
    }
                                        
            foreach($liste as $row){




    ?>
    <form class="card-body" action="modifierB.php" onsubmit="verif()"  method="POST" >
    <tr>
    <td>
      <input type="submit" value="edit" class="btn btn-sm btn-danger m-b-5 m-t-5" name="edit" >
      <input type="hidden" value="<?PHP echo $row['IdBillet']; ?>" name="IdBillet_ini" >
      </td>
    <td><input type="int" value="<?PHP echo $row['IdBillet']; ?>" name="IdBillet" id="IdBillet">; </td>
    <td><input type="date" value="<?PHP echo $row['DateVoyage']; ?>"id="DateVoyage"name="DateVoyage">; </td>
    <td><input type="text" value="<?PHP echo $row['destination'] ;?>"id="destination"name="destination">; </td>
    <td><input type="int" value="<?PHP echo $row['prix']; ?>"id="prix" name="prix">; </td>
    <td><input type="int" value="<?PHP echo $row['dispo']; ?>"id="dispo" name="d">; </td>
   
    
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