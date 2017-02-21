<?php 

	if (isset($_POST['envoyer'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

			$errors =[];

			extract($_POST);

			if (mb_strlen($name) < 3) || trim($name) {
				$errors[] = "Nom trop court (Minimun 3 caracteres)";
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors[] = "";
			}

			if (count($errors) == 0 ) {

				//Envoi de mail 

				$to = $email

				$subject = "Bien reçu votre email";

				$message = "<p>Bonjour " .$name ",</p>
							<p>Nous avons bien reçu votre email. Nous nous dépêchons pour vous apporter une réponse très vite ! :-)</p>
							<p>À bientôt<br>
							L'équipe d'APJEC</p>"


		else {
			$errors[] = "Veuillez remplir tous les champs !";
		}

	}
?>


<?php 


	require('views/contact.view.php');