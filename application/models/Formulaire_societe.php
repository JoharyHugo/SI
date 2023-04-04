<?php 
/**
 * 
 */

class Formulaire_societe extends CI_Model{	
	public function __construct(){
		parent::__construct();
	}

	// fonction qui insert les données dans la table
	public function insertion($nom,$objet,$siege,$adresse,$nom_dirigant,$logo,$mdp,$num_fisc,$num_stat,$num_registre,$status,$debut_compta,$device_compte,$device_equivalence){
		$sql="INSERT INTO Info VALUES ('%s','%s','%s','%s','%s','%s','%s','%f','%f','%f','%s','%s','%s','%s')";
		$sql=sprintf($sql,$nom,$objet,$siege,$adresse,$nom_dirigant,$logo,$mdp,$num_fisc,$num_stat,$num_registre,$status,$debut_compta,$device_compte,$device_equivalence);
		try {
			$this->db->query($sql);
		} catch (Exception $e) {
			throw new Exception($e->getMessage());			
		}
	}


	// récupére tout les informations dans le table Info
	public function selectAll(){

		$this->load->database();
		$this->db->select('*');
		$this->db->from('Info');
		$query = $this->db->get();
		$resultats = $query->result_array(); // retourne les rasultats sous forme de tableau

		return $resultats;
	}
}
?> 
