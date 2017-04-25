<?php $title = "Supprimer un article" ?>

<?php require('partials/_header.php'); ?>

	<div class="content-wrapper">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Supprimer un article
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>id</th>
										<th>Titre</th>
										<th>Auteur</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td><a href="#" class="btn btn-danger">Supprimer</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td><a href="#" class="btn btn-danger">Supprimer</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td><a href="#" class="btn btn-danger">Supprimer</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require('partials/_footer.php'); ?>