<?php
	foreach ($conducteurById as $conducteur) {
		?>
			<div class="container">
				<form method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Prénom</label>
				    <input type="text" class="form-control" name="prenom" value="<?php echo $conducteur->getPrenom(); ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nom</label>
				    <input type="text" class="form-control" name="nom" value="<?php echo $conducteur->getNom(); ?>">
				  </div>
				  
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		<?php
	}
?>