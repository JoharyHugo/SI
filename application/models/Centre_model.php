<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Centre_model extends CI_Model {
    public function FunctionName($idStructure,$idOperationnel,$coutdirect,$cle,$centrestruturel,$coutTotal)
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
}

?>