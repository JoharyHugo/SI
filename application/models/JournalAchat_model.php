<?php
    if (! defined('BASEPATH')) exit('No direct script access allowed');
    class JournalAchat_model extends CI_Model 
    {

        public function getAllJournalAchat(){
            $sql = "SELECT * FROM JournalTemporaire";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        } 

        public function getJournalAchat($type){
            $sql = "SELECT SUM(debit) AS totalDebit, SUM(credit) AS totalCredit FROM journalTemporaire WHERE type = '%s'";
            $sql = sprintf($sql, $type);
            //echo $sql;
            $query = $this->db->query($sql);
            $liste = $query->row_array();
            return $liste;
        }

        public function insertNewJournal($date,$numeroPiece,$pieceReferences,$comptegenerale,$compteTiers,$libelle,
        $type,$debit,$credit,$devise,$montant)
        {
            $sql="insert into JournalTemporaire values (null,%d,'%s','%s','%s','%s','%s','%s',%d,%d,'%s',%d)";
            $sql=sprintf($sql,$date,$numeroPiece,$pieceReferences,$comptegenerale,$compteTiers,$libelle,
            $type,$debit,$credit,$devise,$montant);
            try {
                //echo $sql;
                $this->db->query($sql);
            } 
            catch (Exception $th) 
            {
                throw new Exception($th->getMessage());
            }
        }
        
        public function supprimerJournal($id){
            $sql=$this->db->query("DELETE FROM JournalTemporaire where id='$id'");
            //echo $sql;
            
        }  
        
        public function verificationSomme() {
            // Récupération des débits et crédits du compte
            $sql = "SELECT SUM(debit) AS totalDebit, SUM(credit) AS totalCredit FROM journalTemporaire WHERE type = 'Achat'";
            $resultat=$this->db->query($sql);
            //echo $sql;
            //$liste = $resultat->row_array();
            // $resultat = $conn->query($sql);
            if ($resultat->num_rows > 0) {
               $ligne = $resultat->fetch_assoc();
               $totalDebit = $ligne["totalDebit"];
               $totalCredit = $ligne["totalCredit"];
               // Vérification de la somme des débits et crédits
               if ($totalDebit == $totalCredit) {
                // return $liste;
                  return "La somme des débits et crédits est égale.";
               } else {
                  return "La somme des débits et crédits est incorrecte.";
               }
            } else {
               return "Aucun enregistrement trouvé.";
            }
         }
         
        /*public function getNumberUser()
        {
           $sql="select count(*) from User";
           $query=$this->db->query($sql);
           $row=$query->row_array();
           return $row['count(*)'];
        }

        public function getNumberEchange()
        {
           $sql="select count(*) from Echange";
           $query=$this->db->query($sql);
           $row=$query->row_array();
           return $row['count(*)'];
        }*/
    }
    


    

     
     
    
?>