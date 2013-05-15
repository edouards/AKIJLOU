<?php
//Vérifie les données envoyées par le formulaire et ajoute la photo
function AddPhoto(){
	if(isset($_POST['apptId']) && isset($_POST['bailId']) && isset($_FILES['nomPh']['name'])){

		$path = 'Photos/'.$_POST['bailId'];
		$fichier = basename($_FILES['nomPh']['name']);
		$taille_maxi = 2147483648; // équivalent à 2Go;
		$taille = filesize($_FILES['nomPh']['tmp_name']);
		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['nomPh']['name'], '.');

		//On vérifie si le dossier à déjà été créé
		//Si non on le crée
		//Si oui on stocke le fichier uploadé
		if(!file_exists($path)){
			mkdir($path,0777,false);
		}

		if(!in_array($extension, $extensions)){
		     $erreur = "Vous devez uploader un fichier de type png, gif, jpg, jpeg.";
		}

		if($taille>$taille_maxi){
		     $erreur = "Le fichier est trop gros.";
		}

		if(!isset($erreur)){
		     //On formate le nom du fichier ici...
		     $fichier = strtr($fichier, 
		          "ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ", 
		          "AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy");
		     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

		     if(!file_exists($path.'/'.$fichier)){
		     	if(move_uploaded_file($_FILES['nomPh']['tmp_name'], $path."/".$fichier)){
		     		include("connect.php");
			        $phAdd = $connect->prepare("INSERT INTO photo (ph_nom,ph_chemin,ph_idApp)
			          								VALUES(:nomPh,:pathPh,:appId)");
			        $phAdd->bindParam(':nomPh',$fichier);
			        $phAdd->bindParam(':pathPh',$path);
			        $phAdd->bindParam(':appId',$_POST['apptId']);
			        $phAdd->execute();
			        $phAdd->closeCursor(); 

		     	}
		     }

		}else{
		     echo $erreur;
		}
	}
}

AddPhoto();