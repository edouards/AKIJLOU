<?php
	$PARAM_hote="localhost"; //le chemin vers le serveur
	//$PARAM_port='3306';
	$PARAM_nom_bd='akijlou'; // le nom de votre base de données
	$PARAM_utilisateur='edouard'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='ZTmGb4KchGLjpMmD'; // mot de passe de l'utilisateur pour se connecter

	try
	{
		$connect = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur,$PARAM_mot_passe,array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		echo $e;
		die();
	}

?>