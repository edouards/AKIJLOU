<?php
/*
Fonction permettant d'ajouter un utilisateur
retourne 0 si échoué
retourne un message contenant l'id utilisateur si réussi
*/
function AddUser(){
	//Instance de connexion
	include("connect.php");

	if(isset($_POST['username']) && isset($_POST['passwd']) && strlen($_POST['passwd'])>8){
		//On vérifie qu'il n'y ai pas déjà le même pseudo
		$logExist = $connect->prepare("SELECT bail_login FROM bailleur");
		$logExist->execute();
		$result = $logExist->fetchAll(PDO::FETCH_ASSOC);
		
		//Si on ne trouve pas le même identifiant dans la base on joute l'utilisateur
		//Sinon on lui indique que le login n'est pas disponible
		for($i=0;$i<count($result);$i++){
			if($_POST['username']==$result[$i]['bail_login']){
				return 0;
			}
		}
		//on ajoute le nouveau bailleur
		$bailleur = $connect->prepare("INSERT INTO bailleur (bail_login,bail_pwd)
										VALUES(:login,:passwd)");
		$bailleur->bindParam(':login',$_POST['username']);
		$bailleur->bindParam(':passwd',crypt($_POST['passwd'],$_POST['username']));
		$bailleur->execute();
		//On récupère l'id de l'utilisateur fraichement enregistré
		$bailId = $connect->prepare("SELECT bail_id FROM bailleur WHERE bail_login=:log AND bail_pwd=:pwd");
		$bailId->bindParam(':log',$_POST['username']);
		$bailId->bindParam(':pwd',crypt($_POST['passwd'],$_POST['username']));
		$bailId->execute();
		$id = $bailId->fetchAll(PDO::FETCH_OBJ);
		return $id[0]->bail_id;
	}
}
?>