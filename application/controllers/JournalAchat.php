<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JournalAchat extends CI_Controller {
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

    public function newJournalAchat() {
        $this->load->model('JournalAchat_model', 'model');

        $jour = $this->input->post('jour');
        $numero = $this->input->post('piece');
        $piece = $this->input->post('reference');
        $compte = $this->input->post('compte1');
        if(strlen($compte) == 1) {
            $compte = $compte."0000";
        } elseif(strlen($compte) == 2) {
            $compte = $compte."000";
        } elseif(strlen($compte) == 3) {
            $compte = $compte."00";
        } elseif(strlen($compte) == 4) {
            $compte = $compte."0";
        } else {
            // Si le nombre entré contient déjà 5 chiffres, on ne fait rien
        }
        
        $tiers = $this->input->post('compte2');
        $libelle = $this->input->post('libelle');
        $type = $this->input->post('type');
        $devise = $this->input->post('devise');
        $debit = $this->input->post('debit');
        $credit = $this->input->post('credit');
        $montant=$this->input->post('montant');
        $this->model->insertNewJournal($jour,$numero,$piece,$compte,$tiers,$libelle,$type,$debit,$credit,$devise,$montant);
        //redirect("./welcome/index");
        $this->load->view('SaisieJournal');
    }

    public function verification()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSomme();
        $val=$this->model->getAllJournalAchat();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationAchat()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSomme();
        $val=$this->model->getJournalAchatValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationVente()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSomme();
        $val=$this->model->getJournalVenteValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationBanque()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSomme();
        $val=$this->model->getJournalBanqueValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function total()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalAchat('Achat');
        $rep=$this->model->getJournalAchat('Achat');
        $rep=$this->model->getJournalAchat('Achat');
        $valiny['journal'] = $rep;
        $this->load->view('Total',$valiny);
    }
    

    /*public function getAllTiers()
    {
        $this->load->model('PlanTiers_model','model');
        $val=$this->model->getAllTiers();
        $data['reponse'] = $val;
        $this->load->view('Plus',$data);
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
    }*/
}

?>