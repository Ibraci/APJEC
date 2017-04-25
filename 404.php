<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Action pour la Promotion des Jeunes et Enfants Communicateurs">
		<meta name="author" content="Ibrahim CISSE">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title><?php echo isset($title) ? $title .' | APJEC' : 'APJEC | Action pour la Promotion des Jeunes et Enfants Communicateurs' ; ?></title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="css/style.css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		<meta name="google-site-verification" content="61XzmO50hOtsrla2yNCt5QlnUAdS7kXBMk-MRC4s_kE" />

		<link rel="alternate" hreflang="fr" href="https://www.apjec.ml/"/>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" type="image/png" href="favicon.ico" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">		
	</head>

	<body class="page">

		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><a href="index.html">APJEC</a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					
					<nav>
						<ul class="reset" role="navigation">
							<li class="menu-item"><a href="index.php">Accueil</a></li>
							<li class="menu-item"><a href="qui-sommes-nous.php">Qui sommes-nous ?</a></li>
							<li class="menu-item"><a href="notre-journal.php">Notre Journal</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>

		<main role="main">

			<div id="main" class="row">
				<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
					<div class="column nine">
						<article class="clear-after">
							<h2>Page non trouvée</h2>
							<p>Désolé mais nous n'avons pas pu trouver la page que vous recherchez. Veuillez vérifier que vous avez saisi l'URL correctement. Vous pouvez également rechercher ce que vous recherchez.</p>
						</article>										
					</div><!-- column nine -->
				</div><!-- row-content -->
			</div><!-- row -->
		</main><!-- main -->


		<footer>
			<div class="row">
				<div class="row-content buffer clear-after">
					<section id="top-footer">
						<div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
							<h4>Menu</h4>
							<ul class="plain">
								<li><a href="index.php">Accueil</a></li>
								<li><a href="qui-sommes-nous.php">Qui sommes-nous ?</a></li>
								<li><a href="notre-journal.php">Notre Journal</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<div class="widget column three">
							<h4>Autres</h4>
							<ul class="plain">
								<li><a href="rejoignez-nous.php">Rejoignez-nous</a></li>
								<li><a href="#">Nos Activites</a></li>
								<li><a href="#">Nos Realisations</a></li>
								<li><a href="#">Domaine d'intervention</a></li>
								<li><a href="galerie.php">Galerie</a></li>
							</ul>
						</div>								
						<div class="widget column three">
							<h4>Adresse</h4>
							<p>
								+223 66 00 80 08<br>
								apjec@apjec.ml<br>
								Cite des Enfants,<br>
								Niamakoro,<br>
								Bamako,<br>
								Mali.
							</p>
						</div>				
						<div class="widget meta-social column three">
							<h4>Suivez-nous</h4>
							<ul class="inline">
								<li><a href="https://twitter.com/ongapjec" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="https://www.facebook.com/ongapjec/" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="#" class="youtube-share border-box"><i class="fa fa-youtube fa-lg"></i></a></li>
							</ul>
						</div>														
					</section><!-- top-footer -->
					<section id="bottom-footer">
						<p class="keep-left">&copy; 2017 <a href="http://apjec.ml" alt="APJEC">APJEC</a>. Powered by <a href="https://ibracilinks.ml" alt="Ibraci Links">Ibraci Links</a></p>
					</section><!-- bottom-footer -->			
				</div><!-- row-content -->	
			</div><!-- row -->	
		</footer>
			<!--  AIzaSyCdzv_aTNsJzrosK4ziQhu95ZifWADrQe8 = API Key -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdzv_aTNsJzrosK4ziQhu95ZifWADrQe8&callback=initMap"></script> -->
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		<!-- <script>
		$(document).ready(function(){
			$('#send').click(function(){
				$(this).val('Envoi ...');
				$('#success p').remove();
				$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
					$('#success').html(response);
					//$('#success').hide('slow');
					$('#send').val('Send a Message');
				});
				return false;
			});
		});
		</script> -->
		
	</body>

</html>