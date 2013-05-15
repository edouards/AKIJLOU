<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../style.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container" style="width:60%;">
			<form method="POST" action="../espaceUser.php">
				<input type="hidden" id="idappOk" name="idappOk" value="<?php echo $_POST['idapp']; ?>"/>
				<legend style="text-align:center;">Formulaire d'ajout d'un commentaire</legend>
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="objet">Objet</label>
						<div class="controls">
							<input type="text" id="objet" name="objet"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="message">Message</label>
						<div class="controls">
							<textarea rows="5" type="text" id="message" name="message"></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-danger" value="Annuler"/>
							<input type="submit" class="btn btn-success" id="validCom" value="Ajouter"/>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<script src="../Javascript/VerifCom.js"></script>
	</body>
</html>