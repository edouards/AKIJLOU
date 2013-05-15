<?php
	//Déconnecte l'utilisateur et le ramène en page d'accueil
	if(isset($_POST['deco'])){
		session_destroy();
		header("Location: index.php");
	}
?>