<?php
//Vérification de l'ajout d'un commentaire
//Si l'id de l'appartement à été transmis on ajoute le commentaire
if(isset($_POST['idappOk'])){
	function AddCommentaire(){
		include("connect.php");
		//Vérification des paramètres
		/*if(isset($_POST['objet']) && isset($_POST['message'])){
			echo $_POST['idapp'];
			echo strlen($_POST['objet']);
			echo strlen($_POST['message']);
		}*/
		if(isset($_POST['objet']) && isset($_POST['message']) && strlen($_POST['message'])<=150 && strlen($_POST['objet'])!=0 && strlen($_POST['message'])!=0){
			$rowCom = $connect->prepare("INSERT INTO commentaire (com_content,com_objet,com_idApp)
										VALUES(:message,:objet,:idapp)");
			$rowCom->bindParam(':message',$_POST['message']);
			$rowCom->bindParam(':objet',$_POST['objet']);
			$rowCom->bindParam(':idapp',$_POST['idappOk']);
			$rowCom->execute();
			$rowCom->closeCursor();
		}
	}
	AddCommentaire();
}
?>