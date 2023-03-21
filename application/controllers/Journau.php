<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Journau extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }*/
    public function getAllJournaux()
    {
        $this->load->model('Journaux_model','model');
        $val=$this->model->getAllJourneaux();
        $data['reponse'] = $val;
        $this->load->view('Journal',$data);
    }
    public function getOneJournau($id)
    {
        $this->load->model('Journaux_model','model');
        $val=$this->model->getJourneaux($id);
        $data['datas'] = $val;
        $this->load->view('ModifierJournau',$data);   
    }
    public function newJourneau() {
        $this->load->model('Journaux_model', 'model');

        $numero = $this->input->post('code');

        $nom = $this->input->post('intitule');

        $this->model->ajoutJournaux($numero,$nom);
        $this->load->view('Journeaux');
    }

    public function deleteJournau($id)
    {
        $this->load->model("Journaux_model", "model");
        $this->model->supprimerJournau($id);

        $this->load->view('Journeaux');
    }

    public function modifierJournau() {
        $this->load->model('Journaux_model', 'model');
        $numero= $this->input->post('code');
        $nom= $this->input->post('intitule');
        $id= $this->input->post('id');
        
        $this->model->updateJournau($id, $numero, $nom);
        $this->load->view('Journeaux');
    }


   

}

?>