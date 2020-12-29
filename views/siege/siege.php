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
        
    if (document.getElementById("NumAllée").value > "10" ) {
      alert("Tapez un NumAllée valable pour avoir une réponse.");
      document.getElementById("NumAllée").focus();
      return false;
    }
    if (document.getElementById("NumRang").value>"10") {
      alert("Pensez à taper un RANG valable !");
      document.getElementById("NumRang").focus();
      return false;

    }
        if( (document.getElementById("class").value!="econnomy")|| (document.getElementById("class").value!="first")) {
      alert("Pensez à taper une class !");
      document.getElementById("class").focus();
      return false;


    }
        
  }</script>
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
                    <li><a href="billet.html">Billet </a></li>
                    <li><a href="produit.html">Produit </a></li>
                    <li> <a href="Vols.html" > Vols </a> </li>
                    <li><a href="coaching.html">Coaching</a></li>
            o        <li><a href="historique.html">Historique</a></li>

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
<h1>siege </h1> 
<h1> ajouter siege </h1> 
            <form action="ajoutS.php" method="post" onsubmit="return verif()">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>gestion siege</td>
                   
                    <td>
                        <label for="NumAllée">NumAllée:
                        </label>
                    </td>
                    <td><input type="int" name="NumAllée" id="NumAllée" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="NumRang">NumRang:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="NumRang" id="NumRang" >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="class">class:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="class" id="class" >
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="ajouter siege"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>

                <br><br><br><br>

                <a href="promo.html" >  <img class="imagenext" src="assets/images/next.png"  >  </a>
                <br>
                <h1 class="imagenext1">Suivant</h1>


    </section>



    <!--<section class="section contact-me" data-section="section4">
      <div class="container">
        <div class="section-heading">
          <h2>Contact Me</h2>
          <div class="line-dec"></div>
          <span
          >Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
            efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
            sit amet, consectetur adipiscing elit.</span>
        </div>
        <div class="row">
          <div class="right-content">
            <div class="container">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <fieldset>
                      <input
                              name="name"
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder="Your name..."
                              required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset>
                      <input
                              name="email"
                              type="text"
                              class="form-control"
                              id="email"
                              placeholder="Your email..."
                              required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <input
                              name="subject"
                              type="text"
                              class="form-control"
                              id="subject"
                              placeholder="Subject..."
                              required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <textarea
                              name="message"
                              rows="6"
                              class="form-control"
                              id="message"
                              placeholder="Your message..."
                              required=""
                      ></textarea>
                    </fieldset>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">
                        Send Message
                      </button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> --> <!-- contact me block -->
    </section>

</div>



</body>
</html>




