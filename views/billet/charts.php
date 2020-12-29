<!DOCTYPE html>
<html lang="en">
<?php include "../../core/billetC.php";
 $billet1C=new billetC();
 $liste =$billet1C->afficherbillet7();
?>
<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>test </title>
		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

    </head>
    <body class="app ">
       
	


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title"> Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Chart</a></li>
								<li class="breadcrumb-item active" aria-current="page">High Charts</li>
							</ol>
						</div>
						<!--page-header closed-->

						<!--row open-->
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Bar Chart</h4>
									</div>
									<div class="card-body">
										<div id="highchart7"></div>
										
										<button id="inverted" class="btn btn-primary btn-sm">Inverted</button>
										<button id="polar" class="btn btn-primary btn-sm">Polar</button>
										
									</div>
								</div>
							</div>
						</div>
						


                        
			
						<!--row closed-->

					</section>
				</div>
				<script>
		</script>
	<!--Scripts js-->
	<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		

	
      <!--Jquery.min js-->
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
		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

		<?PHP		$m=0;$l=0;							foreach($liste as $row){
			
if($row['destination'] == "MAR")
{$m++;

}
if($row['destination'] == "LUNE")
{$l++;

}
	
}

	?>
	
    
 


		<script >		$(function(e){
  

  /* ---hightchart7----*/
  var chart = Highcharts.chart('highchart7', {

  title: {
	  text: ''
  },

  subtitle: {
	  text: 'Plain'
  },
  exporting: { enabled: false },
  credits: {
	  enabled: false
  },
  xAxis: {
	  categories: ['MARS','LUNE']
  },
  colors: ['#7673e6', '#f47b25'],
  series: [{
	  type: 'column',
	  colorByPoint: true,
	  data:[<?php echo json_encode($m)?>, <?php echo json_encode($l)?>],
	  showInLegend: false
  }]

});


$('#plain').on("click", function () {
  chart.update({ 
	chart: {
		  inverted: false,
		  polar: false,
		  
	  },
	  subtitle: {
		  text: 'Inverted'
	  }
  
  });
});

$('#inverted').on("click", function () {
  chart.update({
	  chart: {
		  inverted: true,
		  polar: false
	  },
	  subtitle: {
		  text: 'Inverted'
	  }
  });
});

$('#polar').on("click", function () {
  chart.update({
	  chart: {
		  inverted: false,
		  polar: true
	  },
	  subtitle: {
		  text: 'Polar'
	  }
  });
});



});
///////////



/////

</script>
	<!--Jquery.min js-->
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

		<!--Hightchart js-->
		<script src="assets/plugins/highcharts/highcharts.js"></script>
		
		<script src="assets/plugins/highcharts/exporting.js"></script>
		<script src="assets/plugins/highcharts/export-data.js"></script>
		<script src="assets/plugins/highcharts/histogram-bellcurve.js"></script>
		<script src="assets/plugins/highcharts/solid-gauge.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
</html>