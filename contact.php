<?php

	require('config/database.php');

	if (isset($_POST['envoyer'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$message = htmlspecialchars($_POST['message']);

			$req = $db->prepare('INSERT INTO message(name, email, message) VALUES(:name, :email, :message)');
			$req->execute(array(
				'name' => $name,
				'email' => $email,
				'message' => $message
				));
		}
	}

 ?>


<?php 


	require('views/contact.view.php');