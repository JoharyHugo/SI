<?php 
    if (! defined('BASEPATH')) exit('No direct script access allowed');

    class Login_model extends CI_Model {
        public function checkLoginUser($mail, $mdp)
        {
            $sql = "SELECT * FROM Info WHERE Nom = '%s' and mdp = '%s'";
            $sql = sprintf($sql, $mail, $mdp);

            $query = $this->db->query($sql);

            $row = $query->row_object();

            return $row;
        }   

        public function getAllEmail()
        {
           $sql="Select Nom from Info";
           $query=$this->db->query($sql);
           $liste=array();
          foreach($query->result_array() as $row){
            $liste[]=$row['Nom'];
          }
           return $liste;
        }
        public function checkDoublonMail($mail)
        {
           $this->load->model('Login_model');
           $tab= $this->Login_model->getAllEmail();
           for ($i=0; $i <count($tab) ; $i++) { 
           if ($tab[$i]==$mail) {
            throw new Exception("le Nom existe deja ");
           }
           }
        }
        public function insertNewUser($nom,$prenom,$mdp,$mail,$tel)
        {  
            $this->load->model('Login_model');
            $this->Login_model->checkDoublonMail($mail);
           $sql="insert into User values(null,'%s','%s','%s','%s','%s')";
           $sql=sprintf($sql,$nom,$prenom,$mdp,$mail,$tel);
           try {
           $this->db->query($sql);
           } catch (Exception $e) {
            throw new Exception($e->getMessage());
           }
        }
        
    }
?>