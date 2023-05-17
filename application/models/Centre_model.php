<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Centre_model extends CI_Model {
    public function insertCentres($idStructure,$idOperationnel,$coutdirect,$cle,$centrestruturel,$coutTotal)
    {
        $sql="INSERT INTO Centredetail VALUES(%d,%d,%d,%d,%d,%d)";
        $sql=sprintf($sql,$idStructure,$idOperationnel,$coutdirect,$cle,$centrestruturel,$coutTotal);
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
    public function getAllidStructurel()
    {
      $sql="SELECT DISTINCT  idCentreStructurel FROM Centredetail";
      $query=$this->db->query($sql);
      $liste=array();
      foreach($query->result_array() as $row){
        $liste[]=$row;
      }
      return $liste;
    }
    public function getCentredetail($idStructurel)
    {
        $sql="SELECT * FROM V_aboutCentre WHERE idCentreStructurel=%d";
        $sql=sprintf($sql,$idStructurel);
        $query=$this->db->query($sql);
        $liste=array();
        foreach($query->result_array() as $row){
          $liste[]=$row;
        }
        return $liste;
    }
    public function getSommeAchatCentre($idcentre)
    {
        $sql="SELECT SUM(prix) as CoutDirect FROM ChargeCentre WHERE idCentre=%d";
        $sql=sprintf($sql,$idcentre);
        $query=$this->db->query($sql);
        $info= $query->row_array();
        return $info;
    }
}

?>