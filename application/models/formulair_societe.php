<?php 
/**
 * 
 */

class formulair_societe extends CI_Model{	
	public function __construct(){
		
	}

	public function insertion($id,$nom,$objet,$siege,$adresse,$nom_dirigant,$logo,$mdp,$num_fisc,$num_stat,$num_registre,$status,$debut_compta,$device_compte,$device_equivalence){
		$sql="INSERT INTO Info VALUES (null,'%s','%s','%s','%s','%s','%s','%s','%f','%f','%f','%s','%s','%s','%s')";
		$sql=sprintf($sql,$nom,$objet,$siege,$adresse,$nom_dirigant,$logo,$mdp,$num_fisc,$num_stat,$num_registre,$status,$debut_compta,$device_compte,$device_equivalence);
		try {
			$this->db->query($sql);
		} catch (Exception $e) {
			throw new Exception($e->getMessage());			
		}
	}
}
?> 
