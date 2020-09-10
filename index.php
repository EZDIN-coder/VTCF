<?php
	
	require_once "./Vues/header.html";
	require_once "Controlleurs/ConducteurController.php";

	require_once 'Controlleurs/VehiculeController.php';

	$conducteur = new ConducteurController();
	$vehicule = new VehiculeController();

	if (isset($_GET['action'])) {

		if($_GET['action'] == 'modifierConducteur'){
			$conducteur->show($_GET['conducteurId']);
		}
		elseif($_GET['action'] == 'supprimerConducteur'){
			$conducteur->delete($_GET['conducteurId']);
		}
		/* LES VEHICULES - CRUD */
		elseif($_GET['action'] == 'ajoutVehicule'){
			$vehicule->list();
			$vehicule->ajout();
		}
		elseif($_GET['action'] == 'modifierVehicule'){
			$vehicule->show($_GET['vehiculeId']);
		}
		elseif($_GET['action'] == 'supprimerVehicule'){
			$vehicule->delete($_GET['vehiculeId']);
		}
	}else{
		/* Afficcher la liste des conducteurs*/
		$conducteur->listConducteur();

		/* Ajout de nouveau conducteur */
		$conducteur->nouveauConducteur();

	}


?>