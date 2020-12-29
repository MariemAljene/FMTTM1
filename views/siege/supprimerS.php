<?php include "../../core/siegeC.php";
 $siege1C=new siegeC();
 $liste =$siege1C->affichersiege();

?>

 <!DOCTYPE html>
 <html>
 <head>
 	
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="templatemo-style.css" />
 </head>
 <body>
 <div id="page-wraper">

   <!-- Sidebar Menu --> <div class="responsive-nav">
    <i class="fa fa-bars" id="menu-toggle"></i>
    <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
            <div class="image">
                <a href="#"><img src="assets/images/logo-2.png"  alt="" /></a>
            </div>
            <div class="author-content">
                <h4>Fly Me To The Moon</h4>
                <span>agence de voyage spatial</span>
            </div>

            <nav class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li><a href="connexion.html">Connexion</a></li>
                    <li><a href="siege.html">siege </a></li>
                    <li><a href="produit.html">Produit </a></li>
                    <li> <a href="Vols.html" > Vols </a> </li>
                    <li><a href="coaching.html">Coaching</a></li>
                    <li><a href="historique.html">Historique</a></li>

                </ul>
            </nav>
            <div class="social-network">
                <ul class="soial-icons">
                    <li>
                        <a href="https://facebook.com/ahmed1990909/"
                        ><img src="assets/images/facebook.png"> </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=yyzsOKUSAMg&ab_channel=NightcoreMtb"><img src="assets/images/youtuve.png"></a>
                    </li>

                </ul>
            </div>
            <audio class="audio2" src="assets/musique/fly-me-to-the-moon-lyrics.mp3" controls></audio>

            <div class="copyright-text">
                <p>2A26 le Groupe de l'espace </p>
            </div>

        </div>
    </div>
</div> <!-- Sidebar Menu -->

   <section class="section about-me" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h1 class="textEnGros">Fly Me To The Moon</h1>
                <div class="line-dec"></div> -->
                <h1> suppression </h1> 
                  
                                                <table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
                                                    <tr class="bg-primary">
                                                        <th>IdSiege</th>
                                                        <th>NumAllée</th>
                                                        <th>NumRang</th>
                                                        <th>class</th>
                                                        
                                                        
                                                        
                                                        <th></th>
                                                    </tr>
        <?PHP                                           foreach($liste as $row){
    ?>
    <tr>
    <td><?PHP echo $row['IdSiege']; ?></td>
    <td><?PHP echo $row['NumAllée']; ?></td>
    <td><?PHP echo $row['NumRang']; ?></td>
    <td><?PHP echo $row['class']; ?></td>
    
    <td><form class="card-body" action="supprimerS.php" method="GET">
      <input type="submit" value="remove" class="btn btn-sm btn-danger m-b-5 m-t-5">
      <input type="hidden" value="<?PHP echo $row['IdSiege']; ?>" name="IdSiege">
        </form></td>
    </tr>
    <?php
}
         ?>    
                                                </table>
                                          

                            <?PHP


?>
    <?PHP

$siegeC=new siegeC();
if (isset($_GET['IdSiege'])){
    $siegeC->Supprimersiege($_GET['IdSiege']);
    
}

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