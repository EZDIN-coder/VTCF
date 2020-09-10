<?php
	foreach ($vehiculeById as $vehicule) {
		?>
			<div class="container">
				<form method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Marque</label>
				    <input type="text" class="form-control" name="marque" value="<?php echo $vehicule->getMarque(); ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Modele</label>
				    <input type="text" class="form-control" name="modele" value="<?php echo $vehicule->getModele(); ?>">
                  </div>
                  <div class="form-group">
				    <label for="exampleInputEmail1">Couleur</label>
				    <input type="text" class="form-control" name="couleur" value="<?php echo $vehicule->getCouleur(); ?>">
                  </div>
                  <div class="form-group">
				    <label for="exampleInputEmail1">Immatriculation</label>
				    <input type="text" class="form-control" name="immatriculation" value="<?php echo $vehicule->getImmatriculation(); ?>">
				  </div>
				  
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		<?php
	}
?>