<?php
	/**
	 * 
	 */
	require_once 'Model.php';

	class Vehicule extends Model
	{
		
		private $id_vehicule;
		private $marque;
		private $modele;
		private $couleur;
		private $immatriculation;


		public function getIdVehicule()
		{
			return $this->id_vehicule;
		}

		public function getMarque()
		{
			return $this->marque;
		}

		public function setMarque($marque)
		{
			return $this->marque =  $marque;
		}

		public function getModele()
		{
			return $this->modele;
		}

		public function setModele($modele)
		{
			return $this->modele =  $modele;
		}

		public function getCouleur()
		{
			return $this->couleur;
		}

		public function setCouleur($couleur)
		{
			return $this->couleur =  $couleur;
		}

		public function getImmatriculation()
		{
			return $this->immatriculation;
		}

		public function setImmatriculation($immatriculation)
		{
			return $this->immatriculation =  $immatriculation;
		}

		public function ajoutVehicule($marque, $modele, $couleur, $immatriculation)
		{
			$bdd = Model::getConnection();

			$requete = $bdd->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES ('$marque','$modele','$couleur','$immatriculation')");

			if(!$requete->execute()){
				die("ATTENTION!!!!");
			}

			//header("Location: index.php?action=ajoutVehicule");
		}



		public function update($id, $marque, $modele,$couleur,$immatriculation)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("UPDATE vehicule SET marque='".$marque."', modele ='".$modele."',couleur ='".$couleur."',
		immatriculation ='".$immatriculation."' WHERE id_vehicule =" .$id);
		

		if(!$sql->execute()){
			die("ATTENTION!!!!");
		}

		header("Location: index.php?action=ajoutVehicule");
	}
	}
?>