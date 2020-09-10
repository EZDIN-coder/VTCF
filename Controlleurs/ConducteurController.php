<?php

/**
 * 
 */

require_once './Models/Conducteur.php';

class ConducteurController
{
	
	public function nouveauConducteur()
	{
		require_once './Vues/formulaire_nouveau_conducteur.html';

		$conducteur =  new Conducteur();

		if(isset($_POST['submit'])){
			
			$prenom = $conducteur->setPrenom($_POST['prenom']);

			$nom = $conducteur->setNom($_POST['nom']);

			$conducteur->create($prenom, $nom);
		}
	}

	public function listConducteur()
	{
		$liste_des_conducteurs = new Conducteur();

		/*APPEL de mon model pour afficher la liste des conducteurs */

		$tous_les_conducteurs = $liste_des_conducteurs->findAll('conducteur');

		require_once './Vues/Conducteur/list.php';
	}

	public function show($id)
	{
		$conducteur = new Conducteur();
		$conducteurById = $conducteur->findById($id, 'conducteur');
		require_once "./Vues/Conducteur/edit.php";

		if(isset($_POST['submit'])){
			foreach ($conducteurById as $value) {
				
				$prenom = $value->setPrenom($_POST['prenom']);
			$nom = $value->setNom($_POST['nom']);
			$value->update($id, $prenom,
				$nom);
			}
		}
	}

	public function delete($id)
	{
		$conducteur = new Conducteur();
		return $conducteur->deleteById($id,'conducteur');
	}
}

?>