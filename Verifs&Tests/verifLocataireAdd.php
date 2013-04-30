<?php
$situations = array("CDD","CDI","CHOMEUR","ETUDIANT","INDEPENDANT");
//Si la variable POST['nomLoc'] est initialisée alors on ajoute l'appartement
if(isset($_POST['nomLoc']) && isset($_POST['appId'])){
	//On vérifie que les données soient valides
	if(strlen($_POST['nomLoc'])>0 && strlen($_POST['prenomLoc'])>0 && strlen($_POST['cautionVersee'])>0 && in_array(strtoupper($_POST['situation']),$situations)==TRUE && strlen($_POST['garant'])>0 && isset($_POST['dateEnter'])){ 
		include("connect.php");
		$row = $connect->prepare("INSERT INTO locataire (loc_nom,loc_prenom,loc_dateEntree,loc_caution,loc_situation,loc_garant,loc_idApp)
									VALUES(:nom,:prenom,:dateEntree,:caution,:situation,:garant,:appId)");
		$row->bindParam(':nom',$_POST['nomLoc']);
		$row->bindParam(':prenom',$_POST['prenomLoc']);
		$row->bindParam(':dateEntree',$_POST['dateEnter']);
		$row->bindParam(':caution',$_POST['cautionVersee']);
		$row->bindParam(':situation',$_POST['situation']);
		$row->bindParam(':garant',$_POST['garant']);
		$row->bindParam(':appId',$_POST['appId']);
		$row->execute();
		$row->closeCursor();
	}
}