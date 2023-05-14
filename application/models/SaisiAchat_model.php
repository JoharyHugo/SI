<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class SaisiAchat_model extends CI_Model { 
        

        public function insertNewAchat($date,$numeroPiece,$pieceReferences,$comptegenerale,$compteTiers,$libelle,
          $prixUnitaire,$quantite,$credit)
        {
            $sql="insert into AchatTable values (null,%d,%d,'%s','%s','%s','%s',%d,%d,%d)";
            $sql=sprintf($sql,$date,$numeroPiece,$pieceReferences,$comptegenerale,$compteTiers,$libelle,
            $prixUnitaire,$quantite,$credit);
            try {
                //echo $sql;
                $this->db->query($sql);
            } 
            catch (Exception $th) 
            {
                throw new Exception($th->getMessage());
            }
        }
        public function getAllAchat(){
            $sql = "SELECT * FROM journalAchatTable";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        } 

        public function getAchat($id){
            $sql = "SELECT * FROM AchatTable WHERE id = %d";
            $sql = sprintf($sql, $id);
            $query= $this->db->query($sql);
            $liste= $query->row_array();
            return $liste;
        }
        

        public function  verificationSommeAchat() {
            $sql = "SELECT SUM(debit) AS totalDebit, SUM(credit) AS totalCredit FROM journalAchatTable";
            $query = $this->db->query($sql);
            $liste = $query->row_array();
            $totalDebit = $liste["totalDebit"];
            $totalCredit = $liste["totalCredit"];
            if ($totalDebit == $totalCredit) {
                return "La somme des débits et crédits est égale.";
            } else {
                return "La somme des débits et crédits est incorrecte.";
            }
        }        
        



        
}
?>