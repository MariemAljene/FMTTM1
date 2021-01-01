
<?php include "../../core/billetC.php";
 $billet1C=new billetC();
 $v=$_POST['DateVoyage'];
 
 $liste =$billet1C->recherche($v);
?>
 <!DOCTYPE html>
 <html>
 <head
<title></title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#Search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    
   $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.POSTElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*POST the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].POSTElementsByTagName("TD")[n];
      y = rows[i + 1].POSTElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
<script>
function sortnumber(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.POSTElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*POST the two elements you want to compare,
      vone from current row and one from the next:*/
        var x=0;
        var y=0;
      x = rows[i].POSTElementsByTagName("TD")[n];
      y = rows[i + 1].POSTElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML > y.innerHTML ){
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
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
    <h1>liste des billets </h1> 
      <ul>
                <table class="table table-bordered mb-0 text-nowrap" id="myTable">
                                                    <tr class="bg-primary">
                                                        <th  onclick="sortnumber(0)">id</th>
                                                        <th  onclick="sortTable(1)">date voyage</th>
                                                        <th onclick="sortTable(2)">destination</th>
                                                        <th  onclick="sortTable(3)">prix</th>
                                                        <th  onclick="sortTable(4)">dispo</th>
                                                       
                            
                                                    </tr>
                                                    <tbody id="myTable">

        <?PHP   

        foreach($liste as $row){
    ?>
    <tr>
    <td><?PHP echo $row['IdBillet']; ?></td>
    <td><?PHP echo $row['DateVoyage']; ?></td>
    <td><?PHP echo $row['destination']; ?></td>
    <td><?PHP echo $row['prix']; ?></td>
  
    <td><?PHP echo $row['dispo']; ?></td>
  <td><form class="card-body" action="rechercheB.php" method="POST">
      <input type="submit" value="reserver" class="btn btn-sm btn-danger m-b-5 m-t-5">
      <input type="hidden" value="<?PHP echo $row['IdBillet']; ?>" name="IdBillet">
<input type="hidden" value="<?PHP echo $d ?>" name="DateVoyage">
        </form></td>
    
    </tr>
    <?php
}
         ?>    
          </tbody>
                                                </table>
       
    </ul>
   
  <?PHP

$billetC=new billetC();
if (isset($_POST['IdBillet'])){
    $billetC->reserver($_POST['IdBillet']);
    
}

?>
 </body>
 </html>