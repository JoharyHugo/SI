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
            //echo $sql;
            $query = $this->db->query($sql);
            $liste = $query->row_array();
            return $liste;
        }

        public function nouveauPlanTiers($type,$num,$intituler)
        {
            $sql="insert into Plan_Tiers values (null,'%s','%s','%s')";
            $sql=sprintf($sql,$type,$num,$intituler);
            try {
                //echo $sql;
                $this->db->query($sql);
            } 
            catch (Exception $th) 
            {
                throw new Exception($th->getMessage());
            }
        }
        
        public function supprimerTiers($id){
            $sql=$this->db->query("DELETE FROM Plan_Tiers where id='$id'");
            //echo $sql;
            
        }  
        
        public function modifierTiers($id,$type,$numero,$intituler)
        {
           $sql="update Plan_Tiers set type='%s',num='%s', intitule= '%s' where id=%d";
           $sql=sprintf($sql,$type,$numero,$intituler,$id);
            //echo $sql;
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