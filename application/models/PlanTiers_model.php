<?php
    if (! defined('BASEPATH')) exit('No direct script access allowed');
    class PlanTiers_model extends CI_Model 
    {

        public function getAllTiers(){
            $sql = "SELECT * FROM Plan_Tiers";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        } 

        public function getTiers($id){
            $sql = "SELECT * FROM Plan_Tiers WHERE id = %d";
            $sql = sprintf($sql, $id);
            $query= $this->db->query($sql);
            $liste= $query->row_array();
            return $liste;
        }

        public function nouveauPlanTiers($id,$type,$num,$intituler)
        {
            $sql="insert into Plan_Tiers values (null,'%s','%s','%s')";
            $sql=sprintf($sql,$id,$type,$num,$intituler);
            try {
            $this->db->query($sql);
            } 
            catch (Exception $th) 
            {
                throw new Exception($th->getMessage());
            }
        }
        
        public function supprimerTiers($id){
            $this->db->query("DELETE FROM Plan_Tiers where id='$id'");
        }  
        
        public function modifierTiers($id,$newTiers)
        {
           $sql="update Plan_Tiers set intituler= '%s' where id=%d";
           $sql=sprintf($sql,$newTiers,$id);
           try {
           $this->db->query($sql);
           } catch (Exception $e) {
            throw $e;
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