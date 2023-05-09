<?php 
 if (! defined('BASEPATH')) exit('No direct script access allowed');
class Achat extends CI_Model{
    
    public function getlastAchat(){
        $sql="SELECT * FROM AchatJournal ORDER BY idAchat DESC LIMIT 1";
        $query=$this->db->query($sql);
        $info= $query->row_array();
        return $info;
    }
    public function insertdetailCharge($idAchat,$idNature,$idtype){
        $sql="INSERT INTO detailCharge VALUES (%d ,%d,%d)";
        $sql=sprintf($sql,$idAchat,$idNature,$idtype);
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
    public function insertChargeCentre($idAchat,$idCentre,$pourcentage){
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
    }
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
}
?>