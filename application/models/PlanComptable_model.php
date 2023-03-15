<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class PlanComptable_model extends CI_Model { 
        
        public function nouveauPlanComptable($numero,$nom)
        {
            $sql="insert into Plan_Comptable values (null,'%d','%s')";
            $sql=sprintf($sql,$id,$numero,$nom);
            try {
            $this->db->query($sql);
            } 
            catch (Exception $th) 
            {
                throw new Exception($th->getMessage());
            }
        }

        public function getAllCompte(){
            $sql = "SELECT * FROM Plan_Comptable";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        } 

        public function getPlanComptable($id){
            $sql = "SELECT * FROM Plan_Comptable WHERE id = %d";
            $sql = sprintf($sql, $id);
            $query= $this->db->query($sql);
            $liste= $query->row_array();
            return $liste;
        }
        public function getOneComptable($id){
            $sql = "SELECT * FROM Plan_Comptable  where id='$id'";
            $query = $this->db->query($sql);
            
            $listes=array();

            if($query !== FALSE && $query->num_rows() > 0){
                foreach ($query->result_array() as $row) {
                    $listes[] = $row;
                }
            }

            return $listes;
        }

        public function updatePlanComptable ($id,$numero,$nom)
        {
            //$sql="update Plan_Tiers set intituler= '%s' where id=%d";
            $sql="update Plan_Comptable set numero=%d,nom='%s' where id=%d";
            $sql=sprintf($sql,$numero,$nom,$id);
            try {
               $this->db->query($sql);
            } catch (Exception $th) {
                throw new Exception($th->getMessage());
            }
        }
        public function supprimerPlanComptable($id){
            $this->db->query("DELETE FROM Plan_Comptable where id='$id'");
        }

        /*public function getUserOb($idObjet)
        { //dpcklc,
           $sql="select u.idUser,u.nom,u.prenom,u.mail,u.tel from Objet o join User u on o.idUser=u.idUser where  o.idObjet=%d";
           $sql=sprintf($sql,$idObjet);  
           $query=$this->db->query($sql);
           $liste=$query->row_array();
           return $liste;                                                                                       
        }

        public function supprimerObjet($idObjet)
        {
            try {
                $this->db->query("DELETE FROM Photo where idObjet='$idObjet'");
                $this->db->query("DELETE FROM Echange where idObjetDemande='$idObjet' or idObjetEchange='$idObjet'");
                $this->db->query("DELETE FROM Objet where idObjet='$idObjet'");
                } catch (\Throwable $th) {
                    throw $th;
                }
        }*/      

    // Traitement Photo
    function getAllPhoto() {
        $sql = "select * from Photo order by idPhoto desc";
        $query = $this->db->query($sql);
        $photo = array();
        foreach ($query->result_array() as $row) {
            $photo[] = $row;
        }
        return $photo;
    }

    function getPhoto($idObjet) {
        $sql = "select * from Photo where idObjet = %d";
        $sql = sprintf($sql, $idObjet);
        $query = $this->db->query($sql);
        $photo = array();
        foreach ($query->result_array() as $row) {
            $photo[] = $row;
        }
        return $photo;
    }

    function insertNewPhoto($photoName, $idObjet) {
        // Inserer la nouvelle photo dans la base de donnees
        $sql = "insert into Photo values (null, %d, '%s')";
        $sql = sprintf($sql, $idObjet, $photoName);
        $this->db->query($sql);
    }
}
?>