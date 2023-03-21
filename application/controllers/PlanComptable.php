<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanComptable extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }*/
    public function getAllComptables()
    {
        $this->load->model('PlanComptable_model','model');
        $val=$this->model->getAllCompte();
        $data['reponse'] = $val;
        $this->load->view('Voir',$data);
    }
    public function getOneCompte($id)
    {
        $this->load->model('PlanComptable_model','model');
        $val=$this->model->getPlanComptable($id);
        $data['datas'] = $val;
        $this->load->view('ModifierComptable',$data);   
    }
    public function newPlanComptable() {
        $this->load->model('PlanComptable_model', 'model');

        $numero = $this->input->post('numero');
        if(strlen($numero) == 1) {
            $numero = $numero."0000";
        } elseif(strlen($numero) == 2) {
            $numero = $numero."000";
        } elseif(strlen($numero) == 3) {
            $numero = $numero."00";
        } elseif(strlen($numero) == 4) {
            $numero = $numero."0";
        } else {
            // Si le nombre entré contient déjà 5 chiffres, on ne fait rien
        }        

        $nom = $this->input->post('nom');

        $this->model->nouveauPlanComptable($numero,$nom);
        $this->load->view('PlanComptable');
    }

    public function deleteCompte($id)
    {
        $this->load->model("PlanComptable_model", "model");
        $this->model->supprimerPlanComptable($id);


        $this->load->view('PlanComptable');
    }

    public function modifierCompte() {
        $this->load->model('PlanComptable_model', 'model');
        $numero= $this->input->post('numero');
        $nom= $this->input->post('nom');
        $id= $this->input->post('id');
        
        $this->model->updatePlanComptable($id, $numero, $nom);
        $this->load->view('PlanComptable');
    }


   

}

?>