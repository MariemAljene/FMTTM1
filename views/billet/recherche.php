<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>Fly me to the moon</title>


    <link href="vendorF/bootstrap/css/bootstrap.min.css" rel="stylesheet" />


      <link rel="stylesheet" href="assetsF/css/fontawesome.css" />

      <link rel="stylesheet" href="assetsF/css/owl.css" />
      <link rel="stylesheet" href="assetsF/css/lightbox.css" />
    <!--      a modifier   -->
     <link rel="stylesheet" href="assetsF/css/votePageCSS.css" />

  </head>
 
</head>

<body>
    <script>
    
    function verif() {
        
 
    
        if (document.getElementById("destination").value==0) {
      alert("Pensez à taper une destination !");
      document.getElementById("destination").focus(); 
      return false;
          if (document.getElementById("DateVoyage").value=="") {
      alert("Pensez à taper une date !");
      document.getElementById("DateVoyage").focus();
      return false;

    }

    }
        
  }
        </script>   
<div id="page-wraper">

    

    <section class="section about-me" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h1 class="textEnGros">Fly Me To The Moon</h1>
                <div class="line-dec"></div>

                <br><br><br>
<h1>billet </h1> 
<h1> chercher billet </h1> 
           
<form action="rechercheB.php" method="post" onsubmit="return verif()" >
            <table border="1" align="center">

                <tr>
                    
                   
                   
                    <td>
                        <label for="DateVoyage">DateVoyage:
                        </label>
                    
                  <input type="date" name="DateVoyage" id="DateVoyage" ></td>
                    <td>
                        <input type="submit" value="chercher">
                      </td>
                      
                   

                </tr>
                
               
                

               
            </table>
        </form>
                <br><br><br><br>

                
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




