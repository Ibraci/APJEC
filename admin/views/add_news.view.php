<?php $title = "Ajouter un article" ?>

<?php require('partials/_header.php'); ?>

	<div class="content-wrapper">
		<div class="container">
			<form method="POST" action="add_news.php" class="col-md-6">
				<div class="form-group">
					<label for="titre">Titre</label>
					<input type="titre" class="form-control" id="titre" placeholder="Entrer un titre" />
				</div>
				<div class="form-group">
					<label for="auteur">Auteur</label>
					<input type="auteur" class="form-control" id="auteur" placeholder="Ex: Siaka Coulibaly" />
				</div>
				<hr />
				<textarea class="form-control" rows="3" placeholder="Ajouter un court resume ne depassant pas 200 caractères"></textarea>
				<hr />
				<textarea class="form-control" rows="3" placeholder="Ecrivez votre contenu ici"></textarea>
				<hr />
				<div class="form-group">
					<label for="image">Ajouter une image</label>
					<input type="file" id="image" />
				</div>
				<button type="submit" class="btn btn-info">Envoyer</button>
			</form>
		</div>
	</div>

<?php require('partials/_footer.php'); ?>