<form method="POST" action="espaceUser.php">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="ad1">Adresse</label>
			<div class="controls">
				<input type="text" id="ad1" name="ad1"/>
			</div>
		</div>
		<div class="control-group">
			<label calss="control-label" for="cplt">Complément d'adresse</label>
			<div class="controls">
				<input type="text" id="cplt" name="cplt"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="cpAppart">Code Postal</label>
			<div class="controls">
				<input type="text" id="cpAppart" name="cpAppart"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="villeAppart">Ville</label>
			<div class="controls">
				<input type="text" id="villeAppart" name="villeAppart"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="loyer">Montant du loyer</label>
			<div class="controls">
				<input type="text" id="loyer" name="loyer" placeholder="exemple...500"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="superficie">Superficie en M²</label>
			<div class="controls">
				<input type="number" id="superficie" name="superficie" value="9"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="nbPiece">Nombre de pièces</label>
			<div class="controls">
				<input type="number" id="nbPiece" name="nbPiece" class="input-small"/>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<button type="submit" id="validAppart" class="btn btn-success">Valider</button>
			</div>
		</div>
	</fieldset>
</form>
<script src="Javascript/VerifAppart.js"></script>