<form method="POST" action="espaceUser.php" style="margin:0%;">
	<fieldset>
		<input type="hidden" id="apptUpdate" name="apptUpdate" value="<?php echo $appartement[$i]->app_id;?>"/>
		<div class="control-group">
			<label class="control-label" for="updateLoyer">Loyer</label>
			<div class="controls">
				<input type="text" id="updateLoyer" name="updateLoyer" value="<?php echo $appartement[$i]->app_loye; ?>" class="input-small"  readonly="readonly"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="updateSuperficie">Superficie en m²</label>
			<div class="controls">
				<input type="number" id="updateSuperficie" name="updateSuperficie" value="<?php echo $appartement[$i]->app_superficie; ?>" class="input-small" readonly="readonly"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="updateNbPiece">Nombre de pièces</label>
			<div class="controls">
				<input type="number" class="input-small" id="updateNbPiece" name="updateNbPiece" value="<?php echo $appartement[$i]->app_nbPiece;?>" readonly="readonly"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="updateActive">Activer la modification</label>
			<div class="controls">
				<input type="checkbox" id="updateActivate" name="updateActivate"/>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" id="validUpdate" class="btn btn-success" style="visibility:hidden;">Modifier</button>
			</div>
		</div>
	</fieldset>
</form>
<script src="Javascript/ActiveUpdate.js"></script>