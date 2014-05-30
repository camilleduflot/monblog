<!DOCTYPE html>
<html>
	<head>
		<title>Voyages - Mon blog</title>
		<meta charset="UTF-8">

		<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600|Roboto+Condensed' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="container" style= "text-align:center">
			<?php include"header.php";?>


		<div class="row">
			<div class="col-md-9">
				<section>
					<div class="col-md-12">
						<section>
							<div class="barrecategorie">
								<img src="icone avion.png" alt="Icone voyages" height= "20" width="20">
								<p> VOYAGES </p>
							</div>
					</div>
							
						
				<div class="row">
					<div class="col-md-6">
						<article>
							<img src="Icone avion.png" alt="Icone voyages" height= "20" width="20">
							<img class="img-responsive" src="Image/Californie.jpg" alt="Californie" height="200px" width="200px">
							<p> 25 mai 2014</p>
							<p> Californie </p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-6">
						<article>
							<img src="Icone avion.png" alt="Icone voyages" height= "20" width="20">
							<img class="img-responsive" src="Image/Hollywood.jpg" alt="Hollywood" height="200px" width="200px">
							<p> 20 mai 2014</p>
							<p> Hollywood </p>
							<p> Résumé </p>
						</article>
					</div>
				</div>
					

				<div class="row">	
					<div class="col-md-6">
						<article>
							<img src="Icone avion.png" alt="Icone voyages" height= "20" width="20">
							<img class="img-responsive" src="Image/Grandcanyon.jpg" alt="GrandCanyon" height="200px" width="200px">
							<p> 15 mai 2014</p>
							<p> Grand Canyon</p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-6">
						<article>
							<img src="Icone avion.png" alt="Icone voyages" height= "20" width="20">
							<img class="img-responsive" src="Image/Santabarbara.jpg" alt="Santabarbara" height="200px" width="200px">
							<p> 10 mai 2014</p>
							<p> Santa Barbara</p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-12">
						<p class="align-right">Articles suivants</p>

					</div>
				</div>
				</section>
					</div>

			<?php include "sidebarpagecategorieetarticle.php";?>
			
		
		</div> <!-- fermeture div class row -->

			<?php include "footer.php"; ?>
		</div> <!--fermeture div class container:text-align center-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>