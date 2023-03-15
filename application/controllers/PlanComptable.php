<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanComptable extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }

    public function index($erreur = null)
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
    }

    public function newPlanComptable() {
        $this->load->model('PlanComptable_model', 'model');

        $numero = $this->input->post('numero');

        $nom = $this->input->post('nom');

        $this->model->nouveauPlanComptable($numero,$nom);
        redirect('./backOffice/index');
    }

    public function deletePlanComptable($id) {      // supprime un categorie
        $this->load->model('PlanComptable_model', 'model');
        $this->model->supprimerPlanComptable($id);
        redirect('./backOffice/index');
    }

    public function updatePlanComptable() {
        $this->load->model('PlanComptable_model', 'model');

        $nom = $this->input->post('nom');
        $idCategorie = $this->input->post('idCategorie');

        $this->model->modifierCategorie($idCategorie, $nom);

        redirect('./backOffice/index');
    }


   

}

?>