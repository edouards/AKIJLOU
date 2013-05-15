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
			<form method="POST" action="../espaceUser.php">
				<legend style="text-align:center;">Formulaire d'ajout de travaux</legend>
				<fieldset>
					<!-- champ caché permettant de récupérer l'id de l'appartement -->
					<input type="hidden" id ="appId" name="appId" value="<?php echo $_GET['appt'];?>"/>
					<div class="control-group">
						<label class="control-label" for="motif">Motif</label>
						<div class="controls">
							<input type="text" id="motif" name="motif"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="dateDebTra">Début des travaux</label>
						<div class="controls">
							<input type="date" id="dateDebTra" name="dateDebTra"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="dateFinTra">Fin des travaux</label>
						<div class="controls">
							<input type="date" id="dateFinTra" name="dateFinTra"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="cout">Estimation du coût des travaux</label>
						<div class="controls">
							<input type="text" id="cout" name="cout" placeholder="Exemple...400"/>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-danger">Annuler</button>
							<button type="submit" class="btn btn-success" id="validTra">Valider</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<script src="../Javascript/VerifTravaux.js"></script>
	</body>
</html>