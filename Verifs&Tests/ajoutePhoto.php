<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../style.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container" style="width:40%;">
			<form method="POST" action="../espaceUser.php" enctype="multipart/form-data">
				<legend style="text-align:center;">Formulaire d'ajout d'une photo</legend>
				<fieldset>
					<!-- champ caché permettant de récupérer l'id de l'appartement et de l'utilisateur-->
					<input type="hidden" id ="apptId" name="apptId" value="<?php echo $_POST['appId'];?>"/>
					<input type="hidden" id="bailId" name="bailId" value="<?php echo $_POST['bailId'];?>"/>

					<div class="control-group">
						<div class="controls">
							<input type="file" id="nomPh" name="nomPh"/>
						</div>
					</div>
					<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
				
						<div class="controls">
							<button type="submit" class="btn btn-danger">Annuler</button>
							<button type="submit" class="btn btn-success" id="validPh">Valider</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<script src="../Javascript/VerifPhoto.js"></script>
	</body>
</html>