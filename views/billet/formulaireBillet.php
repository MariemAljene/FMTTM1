
<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>F.M.T.T.M</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="templatemo-style.css" />

  </head>

  <body>
     <script>
      
    
    function verif() {
        
 
    
         if (document.getElementById("DateVoyage").value=="") {
      alert("Tapez une date  valable pour avoir une réponse.");
      document.getElementById("DateVoyage").focus();
      return false;
    }
    if (document.getElementById("destination").value=="") {
      alert("Pensez à taper une destination !");
      document.getElementById("destination").focus();
      return false;

    }
        if (document.getElementById("prix").value=="") {
      alert("Pensez à taper un prix !");
      document.getElementById("prix").focus();
      return false;

    }
        if (document.getElementById("dispo").value=="") {
      alert("Pensez à taper 1 pour dispo et 0 pour nom dispo !");
      document.getElementById("dispo").focus();
      return false;

    }
        
        
  }
        </script>   
  </script>
    <div id="page-wraper">

      <!-- Sidebar Menu --><div class="responsive-nav">
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
              <li><a href="formulaireBillet.php">Billet </a></li>
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
            <div class="line-dec"></div>

            <br><br><br>

            <h1> ajouter billet </h1> 
            <form action="ajoutBillet.php" method="post" onsubmit="return verif()" >
            <table border="1" align="center">

                <tr>
                    <td rowspan='4' colspan='1'>gestion Billet</td>
                   
                    <td>
                        <label for="DateVoyage">
                          DateVoyage:
                        </label>
                    </td>
                    <td><input type="DATE" name="DateVoyage" id="DateVoyage" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Destination">Destination:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="destination" id="Destination" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dispo">dispo:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="dispo" id="dispo" >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="prix" id="prix" >
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="ajouter billet"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>




             <!-- <tr>

                <td>
                  <input style="background: #888888" type="submit" value="Envoyer" >
                </td>
                <td >
                  <input style="background: #888888"   type="reset" value="Annuler">
                </td>
              </tr>-->





            


<br><br><br><br>

             


      

    </div>



  </body>
</html>
