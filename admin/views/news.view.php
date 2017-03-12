<?php $title = "News" ?>

<?php require('partials/_header.php'); ?>

	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-pencil-square dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  						</div>
                        <h5><a href="add_news.php">Ecrire un nouveau article </a></h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-pencil dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  						</div>
                        <h5><a href="update_news.php">Modifier un article </a></h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-trash dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                        	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        <h5><a href="delete_news.php">Supprimer un article </a></h5>
                    </div>
                </div>
		</div>
	</div>

<?php require('partials/_footer.php'); ?>