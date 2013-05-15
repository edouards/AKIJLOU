<form method="POST" action="espaceUser.php" style="margin:0%;">
	<input type="hidden" id="appIdDel" name="appIdDel" value="<?php echo $appartement[$i]->app_id;?>"/>
	<button type="submit" class="btn btn-danger">Supprimer l'appartement<i class='icon-white icon-trash'></i> </button>
</form>