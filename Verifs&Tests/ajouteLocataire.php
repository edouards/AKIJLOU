<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="../style.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container span6" style="margin-left:35%;">
			<form class="form-horizontal" method="POST" action="../espaceUser.php">
				<legend style="text-align:center;">Formulaire d'ajout d'un locataire</legend>
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="nomLoc">Nom</label>
						<div class="controls">
							<input type="text" id="nomLoc" name="nomLoc"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="prenomLoc">Prenom</label>
						<div class="controls">
							<input type="text" id="prenomLoc" name="prenomLoc"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="dateEnter">Date d'entrée</label>
						<div class="controls">
							<input type="date" id="dateEnter" name="dateEnter"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="cautionVersee">Caution versée</label>
						<div class="controls">
							<input type="text" id="cautionVersee" name="cautionVersee" placeholder="Exemple...400"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="garant">Garant</label>
						<div class="controls">
							<input type="text" id="garant" name="garant" placeholder="Exemple...Martin Dupont"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="situation">Situation</label>
						<div class="controls">
							<select id="situation">
								<option>CDD</option>
								<option>CDI</option>
								<option>CHOMEUR</option>
								<option>ETUDIANT</option>
								<option>INDEPENDANT</option>
							</select>
						</div> 
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-danger">Annuler</button>
							<button type="submit" class="btn btn-success" id="validLoc">Valider</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<script src="../Javascript/VerifLocataire.js"></script>
	</body>
</html>