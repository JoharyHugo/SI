<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanTiers extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }
    */
    /*public function index($erreur = null)
    {
        $this->load->model('PlanComptable_model', 'model');
        $data['content'] = "backOffice";
        $data['header'] = "headerAdmin";
        $data['title'] = "BackOffice page";
        $data['categories'] = $this->model->getAllCategories();
		$nombre1=$this->model->getNumberUser();
        $nombre2=$this->model->getNumberEchange();
        $data['nombre1']=$nombre1;
        $data['nombre2']=$nombre2;
        $this->load->view('template', $data);
    }*/

    public function newPlanTiers() {
        $this->load->model('PlanTiers_model', 'model');

        $numero = $this->input->post('numero');

        $type = $this->input->post('type');

        
        $intitule = $this->input->post('intitule');

        $this->model->nouveauPlanTiers($type,$numero,$intitule);
        $this->load->view('PlanTiers');
    }

    public function getAllTiers()
    {
        $this->load->model('PlanTiers_model','model');
        $val=$this->model->getAllTiers();
        $data['reponse'] = $val;
        $this->load->view('tablePlanTiers',$data);
    }
    public function getOneTiers($id)
    {
        $this->load->model('PlanTiers_model','model');
        $val=$this->model->getTiers($id);
        $data['datas'] = $val;
        $this->load->view('ModifierTiers',$data);   
    }
    public function deleteTiers($id)
    {
        $this->load->model("PlanTiers_model", "model");
        $this->model->supprimerTiers($id);

        $this->load->view('PlanTiers');
        //redirect("./welcome/voir");
    }

    public function updatePlanTiers() {
        $this->load->model('PlanTiers_model', 'model');
        $type = $this->input->post('type');
        $numero= $this->input->post('numero');
        $intitule= $this->input->post('intitule');
        $id= $this->input->post('id');
        
        $this->model->modifierTiers($id, $type, $numero, $intitule);
        $this->load->view('PlanTiers');
    }
}

?>