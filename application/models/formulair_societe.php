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


	public function getInfo($id){
		$sql = "SELECT * FROM Info WHERE id = %d";
		$sql = sprintf($sql, $id);
		echo $sql;
		$query = $this->db->query($sql);
		$liste = $query->row_array();
		return $liste;
	}

	public function getAllInfo(){
		$sql = "SELECT * FROM Info";
		$query=$this->db->query($sql);
		$liste=array();
	   foreach($query->result_array() as $row){
		 $liste[]=$row;
	   }
		return $liste;
	} 
}
?> 
