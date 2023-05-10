<?php 
 if (! defined('BASEPATH')) exit('No direct script access allowed');
class Achat_model extends CI_Model{
    
    public function getlastAchat(){
        $sql="SELECT * FROM AchatJournal ORDER BY idAchat DESC LIMIT 1";
        $query=$this->db->query($sql);
        $info= $query->row_array();
        return $info;
    }
    public function insertdetailCharge($idAchat,$idNature,$idtype,$quantite,$prix,$unite){
        $sql="INSERT INTO detailCharge VALUES (%d ,%d,%d,%d,%d,'%s')";
        $sql=sprintf($sql,$idAchat,$idNature,$idtype,$quantite,$prix,$unite);
        try {
            //echo $sql;
            $this->db->query($sql);
        } 
        catch (Exception $th) 
        {
            throw new Exception($th->getMessage());
            echo $th->getMessage();
        }
    }
    /*public function insertChargeCentre($idAchat,$idCentre,$pourcentage){
        $sql="INSERT INTO ChargeCentre VALUES (%d ,%d,%d)";
        $sql=sprintf($sql,$idAchat,$idCentre,$pourcentage);
        try {
            //echo $sql;
            $this->db->query($sql);
        } 
        catch (Exception $th) 
        {
            throw new Exception($th->getMessage());
            echo $th->getMessage();
        }
    }*/
    public function getAllNature(){
        $sql="SELECT * FROM NatureCharge";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
          $liste[]=$row;
        }
        return $liste;
    }
    public function getAllType(){
        $sql="SELECT * FROM TypeCharge";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
          $liste[]=$row;
        }
        return $liste;
    }
    public function getAllCentre()
    {
        $sql="SELECT * FROM Centre";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
          $liste[]=$row;
        }
        return $liste;
    }
    public function getAchatid($id){
        $sql="SELECT * FROM AchatJournal WHERE idAchat=%d";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $info= $query->row_array();
        return $info;
    }
    public function insertCentreAchat($idAchat,$idCentre,$pourcentage,$prix){
        $sql="INSERT INTO ChargeCentre VALUES (%d,%d,%d,%d)";
        $sql=sprintf($sql,$idAchat,$idCentre,$pourcentage,$prix);
        try {
            //echo $sql;
            $this->db->query($sql);
        } 
        catch (Exception $th) 
        {
            throw new Exception($th->getMessage());
            echo $th->getMessage();
        }
    }
    public function getallAchat()
    {
        $sql="SELECT * FROM AchatJournal ";
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
          $liste[]=$row;
        }
        return $liste;
    }
    public function getdetailChargeId($idAchat)
    {
       $sql="SELECT * FROM detailCharge WHERE idAchat=%d";
       $sql=sprintf($sql,$idAchat);
       $query=$this->db->query($sql);
       $info= $query->row_array();
       return $info;
    }
}
?>