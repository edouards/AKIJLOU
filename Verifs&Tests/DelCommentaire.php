<form method="POST" action="espaceUser.php">
	<fieldset>
		<input type="hidden" id="comId" name="comId" value="<?php echo $commentaires[$j]->com_id;?>"/>
		<input type="submit" class="btn btn-danger" value="Supprimer"/>
	</fieldset>
</form>