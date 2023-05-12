<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class EtatFinanciere_model extends CI_Model { 

        public function getAllCompte20(){
            $sql = "SELECT * FROM Compte20Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        } 

        public function getAllCompte21(){
            $sql = "SELECT * FROM Compte21Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        public function getAllCompte23(){
            $sql = "SELECT * FROM Compte23Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        
        public function getAllCompte3(){
            $sql = "SELECT * FROM Compte3Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        
        public function getAllCompte40(){
            $sql = "SELECT * FROM Compte40Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        
        public function getAllCompte41(){
            $sql = "SELECT * FROM Compte41Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        
        public function getAllCompte5(){
            $sql = "SELECT * FROM Compte5Actif";
            $query=$this->db->query($sql);
            $liste=array();
           foreach($query->result_array() as $row){
             $liste[]=$row;
           }
            return $liste;
        }

        //passif

        public function getAllCompte10(){
          $sql = "SELECT * FROM Compte10Passif";
          $query=$this->db->query($sql);
          $liste=array();
         foreach($query->result_array() as $row){
           $liste[]=$row;
         }
          return $liste;
      }

      
      public function getAllCompte11(){
        $sql = "SELECT * FROM Compte11Passif";
        $query=$this->db->query($sql);
        $liste=array();
       foreach($query->result_array() as $row){
         $liste[]=$row;
       }
        return $liste;
    }

    
    public function getAllCompte12(){
      $sql = "SELECT * FROM Compte12Passif";
      $query=$this->db->query($sql);
      $liste=array();
     foreach($query->result_array() as $row){
       $liste[]=$row;
     }
      return $liste;
  }
  
  public function getAllCompte161(){
    $sql = "SELECT * FROM Compte161Passif";
    $query=$this->db->query($sql);
    $liste=array();
   foreach($query->result_array() as $row){
     $liste[]=$row;
   }
    return $liste;
}



public function getAllCompte165(){
  $sql = "SELECT * FROM Compte165Passif";
  $query=$this->db->query($sql);
  $liste=array();
 foreach($query->result_array() as $row){
   $liste[]=$row;
 }
  return $liste;
}
     
public function getAllCompte401(){
  $sql = "SELECT * FROM Compte401Passif";
  $query=$this->db->query($sql);
  $liste=array();
 foreach($query->result_array() as $row){
   $liste[]=$row;
 }
  return $liste;
}


public function getAllCompte408(){
  $sql = "SELECT * FROM Compte408Passif";
  $query=$this->db->query($sql);
  $liste=array();
 foreach($query->result_array() as $row){
   $liste[]=$row;
 }
  return $liste;
}


public function getAllCompte49(){
  $sql = "SELECT * FROM Compte49Passif";
  $query=$this->db->query($sql);
  $liste=array();
 foreach($query->result_array() as $row){
   $liste[]=$row;
 }
  return $liste;
}


public function getAllCompte51(){
  $sql = "SELECT * FROM Compte51Passif";
  $query=$this->db->query($sql);
  $liste=array();
 foreach($query->result_array() as $row){
   $liste[]=$row;
 }
  return $liste;
}





  

}
?>