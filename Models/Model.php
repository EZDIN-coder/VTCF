<?php

/**
 * 
 */
class Model
{
	public function getConnection()
	{
		try{
			$db =new PDO('mysql:host=localhost;dbname=vtc', "root", "root");
		}
		catch(PDOException $e){
			print "Erreur";
			die;
		}
		return $db;
	}

	public function findById($id, $table){
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("SELECT * FROM $table WHERE id_".$table." = ".$id);

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}
	
	public function deleteById($id, $table)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare(" DELETE FROM $table WHERE id_".$table." = ".$id);

		if(!$sql->execute()){
			die('OUPS!!!!!');
		}
		
		if($table='conducteur'){
			header("Location: index.php");
	    }else{
			header("Location: index.php?action=ajoutVehicule");
		}
	}
	
	public function findAll($table)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("SELECT * FROM $table");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}
}
?>
