<!DOCTYPE html>
<html>
<head>
	<title>Jonathan Fechner - accueil</title>
	<!-- Dublin Core -->
	<meta charset="utf-8">
	<meta name="DC.title" content="Jonathan Fechner">
	<meta name="DC.creator" content="Jonathan Fechner">
	<meta name="DC.subject" content="mots clefs" />
	<meta name="DC.description" content="description du site" />
	<meta name="DC.publisher" content="Auteur">
	<meta name="DC.contributor" content="Contributeur">
	<meta name="DC.date" content="date de création">
	<meta name="DC.type" content="type de site">
	<meta name="DC.format" content="website">
	<meta name="DC.identifier" content="url du site">
	<meta name="DC.language" content="fr-FR">
	<meta name="DC.coverage" content="World">
	<meta name="DC.rights" content="&copy; nom de l'entreprise ou de l'auteur">
	<!-- END Dublin Core -->
	<!-- Referencement -->
	<meta name="description" content="description du site">
	<meta name="keywords" content="mots clefs">
	<meta name="author" content="auteur">
	<meta name="robots" content="index">
	<meta name="Indentifier-URL" content="url du site">
	<!-- END Référencement -->
	<!-- Open Graph -->
	<meta property="og:title" content="titre du site">
	<meta property="og:type" content="website">
	<meta property="og:url" content="url du site">
	<meta property="og:image" content="url de l'image à afficher">
	<meta property="og:site_name" content="titre du site">
	<meta property="og:description" content="texte de description à afficher sur les
	réseaux sociaux">
	<!-- END Open Graph-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container topMargin">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-3">
						<a href="index.php"><img src="image/placeholder.png" class="img-responsive" alt="logo jonathan fechner" title="accueil"></a>
					</div>
					<div class="col-md-9">
						<h1>Jonathan Fechner</h1>
						<h2>Consultant – Formateur T.I.C</h2>
					</div>
				</div>
			</div>
			<div class="row navigationTitle">
				<div class="col-md-2 col-md-offset-1">
					<a class="btn btn-default btn-block" href="#" role="button">Accueil</a>
				</div>
				<div class="col-md-2">
					<a class="btn btn-default btn-block" href="#" role="button">Accueil</a>
				</div>
				<div class="col-md-2">
					<a class="btn btn-default btn-block" href="#" role="button">Accueil</a>
				</div>
				<div class="col-md-2">
					<a class="btn btn-default btn-block" href="#" role="button">Accueil</a>
				</div>
				<div class="col-md-2">
					<a class="btn btn-default btn-block" href="#" role="button">Accueil</a>
				</div>
			</div>
		</div>
	</header>

	<content>
		<div class="container-fluid" id="containCarousel">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  	<!-- Indicators -->
				  	<ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  	</ol>

				  	<!-- Wrapper for slides -->
				  	<div class="carousel-inner" role="listbox">
				    	<div class="item active">
				      		<img src="image/placeholder.png" class="carouselImg" alt="logo jonathan fechner" title="accueil">
				      		<div class="carousel-caption">
				        		<h2>ddddddd</h2>
				        		<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
				      		</div>
				    	</div>
				    	<div class="item">
				      		<img src="image/placeholder.png" class="carouselImg" alt="logo jonathan fechner" title="accueil">
				      		<div class="carousel-caption">
				        		<h2>aaaaaaaaaaaaa</h2>
				        		<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
				      		</div>
				    	</div>
				  	</div>

				  	<!-- Controls -->
				  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
		</div>
	</content>

	<footer>
		<?php
			require 'footer.php';
		?>
	</footer>
</body>
</html>