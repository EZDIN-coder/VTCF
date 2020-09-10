<?php

/**
 * 
 */

require_once './Models/Vehicule.php';

class VehiculeController
{
	
	public function ajout()
	{
		require_once './Vues/Vehicule/formulaire_ajout.html';
		if(isset($_POST['submit'])){
			$vehicule = new Vehicule();

			$marque = $vehicule->setMarque($_POST['marque']);

			$modele = $vehicule->setModele($_POST['modele']);

			$couleur = $vehicule->setCouleur($_POST['couleur']);

			$immatriculation = $vehicule->setImmatriculation($_POST['immatriculation']);

			$vehicule->ajoutVehicule($marque, $modele, $couleur, $immatriculation);
		}

	}

	public function list()
	{
		$vehicule = new Vehicule();

		$liste_vehicules = $vehicule->findAll('vehicule');

		require_once './Vues/Vehicule/list.php';
	}

	public function show($id)
	{
		$vehicule = new Vehicule();
		$vehiculeById = $vehicule->findById($id, 'vehicule');
		require_once "./Vues/vehicule/edit.php";

		if(isset($_POST['submit'])){
			foreach ($vehiculeById as $value) {
				
			$marque = $value->setMarque($_POST['marque']);
			$modele = $value->setModele($_POST['modele']);
			$couleur = $value->setCouleur($_POST['couleur']);
			$immatriculation = $value->setImmatriculation($_POST['immatriculation']);
			$value->update($id, $marque,$modele,$couleur,$immatriculation);
			}
		}
	}

	public function delete($id)
	{
		$vehicule = new Vehicule();
		return $vehicule->deleteById($id,'vehicule');
	}

	
}


?>