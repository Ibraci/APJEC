<?php $title = "Contact"; ?>

<?php include('partials/_header.php'); ?>

<main role="main">
	<div id="intro-wrap" class="">
		<div id="intro" class="preload darken more-button">					
			<div class="map" data-maplat="12.6559882" data-maplon="-8.0148298" data-mapzoom="7" data-color="#(r(-" data-height="300" data-img="img/marker.png" data-info="Nous sommes basés à Bamako, Mali"></div>							
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main">

		<section class="row section">
			<div class="row-content buffer even clear-after">
				<div class="section-title"><h3>Contactez-nous</h3></div>
				<div class="column nine">
					<form id="contact-form" class="contact-section" method="post" action="">
						<span class="pre-input"><i class="fa fa-user"></i></span>
						<input class="name plain buffer" type="text" name="name" placeholder="Nom Complet" required />
						<span class="pre-input"><i class="fa fa-envelope"></i></span>
						<input class="email plain buffer" type="email" name="email" placeholder="Email" required />
						<textarea class="plain buffer" name="message" placeholder="Message" required></textarea>
						<input id="send" name="envoyer" class="plain button red" type="button" value="Envoyer">
					</form>	
					<div id="success"></div>
				</div>
				<div class="column three last">
					<div class="widget">
						<h4>Emplacement</h4>
						<p>
							Cite des Enfants, Niamakoro,<br>
							Bamako,<br>
							Mali
						</p>
					</div>
					<div class="widget">
						<h4>Contact</h4>
						<p>
							+223 66 00 80 08<br>
							apjec@apjec.ml
						</p>
					</div>
					<div class="widget meta-social">
						<h4>Réseaux Sociaux</h4>
						<ul class="inline">
							<li><a href="https://twitter.com/ongapjec" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="https://www.facebook.com/ongapjec/" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="#" class="youtube-share border-box"><i class="fa fa-youtube fa-lg"></i></a></li>
						</ul>
					</div>								
				</div>
			</div>
		</section>

	</div><!-- id-main -->
</main><!-- main -->

<?php include('partials/_footer.php'); ?>