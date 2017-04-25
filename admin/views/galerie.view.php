<?php $title = "Galerie" ?>

<?php require('partials/_header.php'); ?>

	<div class="content-wrapper">
		<div class="container">
			<form method="POST" action="galerie.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="image">Selectionner une image</label>
					<input type="file" id="image" name="image" />
				</div>
				<button type="submit" class="btn btn-default">Envoyer</button>
			</form>
		</div>
	</div>

<?php require('partials/_footer.php'); ?>