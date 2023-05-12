<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Balance extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }
    */

    public function Actif()
    {
       $this->load->model('EtatFinanciere_model', 'model');
       $data['reponse'] = $this->model->getAllCompte20();
       $data1['reponse1'] = $this->model->getAllCompte21();
       $data2['reponse2'] = $this->model->getAllCompte23();
       $data3['reponse3'] = $this->model->getAllCompte3();
       $data4['reponse4'] = $this->model->getAllCompte40();
       $data5['reponse5'] = $this->model->getAllCompte41();
       $data6['reponse6'] = $this->model->getAllCompte5();
       $this->load->view('Actif', array('data' => $data, 'data1' => $data1,'data2' => $data2,'data3' => $data3,
       'data4' => $data4,'data5' => $data5,'data6' => $data6));
    }
   
   public function Passif()
   {
      
      $this->load->model('EtatFinanciere_model', 'model');
      $data['reponse'] = $this->model->getAllCompte10();
      $data1['reponse1'] = $this->model->getAllCompte11();
      $data2['reponse2'] = $this->model->getAllCompte12();
      $data3['reponse3'] = $this->model->getAllCompte161();
      $data4['reponse4'] = $this->model->getAllCompte165();
      $data5['reponse5'] = $this->model->getAllCompte401();
      $data6['reponse6'] = $this->model->getAllCompte408();
      $data7['reponse7'] = $this->model->getAllCompte49();
      $data8['reponse8'] = $this->model->getAllCompte51();
      
      $this->load->view('Passif', array('data' => $data, 'data1' => $data1,'data2' => $data2,'data3' => $data3,
      'data4' => $data4,'data5' => $data5,'data6' => $data6,'data7' => $data7,'data8' => $data8));

   }      
   
   public function Resultat()
   {
      $this->load->view('Resultat');
   }      
}

?>