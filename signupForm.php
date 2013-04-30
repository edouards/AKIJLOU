<!--Formulaire d'enregistrement des nouveaux utilisateurs-->

<form id="signup" method="POST" class="form-horizontal" action="espaceUser.php">
	<fieldset>
		<legend>Formulaire d'enregistrement</legend>
		<span class="help-block">Tous les champs sont obligatoires</span></br>
		<div class="control-group">
			<label for="username" class="control-label">Nom d'utilisateur</label>
			<div class="controls">
				<input id="username" name="username" type="text"/>
			</div>
		</div>
		<div class="control-group">
			<label for="passwd" class="control-label">Mot de passe</label>
			<div class="controls">
				<input id="passwd" name="passwd" type="password"/>
			</div>
		</div>
		<button id="valider" type="submit" class="btn btn-success">Valider</button>
	</fieldset>
</form>

<script src="Javascript/VerifBailleur.js"></script>

