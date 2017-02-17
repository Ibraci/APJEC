<footer role="contentinfo">
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
								<li><a href="#">Galerie</a></li>
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

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		<script>
		$(document).ready(function(){
			$('#send').click(function(){
				$(this).val('Sending ...');
				$('#success p').remove();
				$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
					$('#success').html(response);
					//$('#success').hide('slow');
					$('#send').val('Send a Message');
				});
				return false;
			});
		});
		</script>		

	</body>

</html>