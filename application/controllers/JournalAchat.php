<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JournalAchat extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }
    */

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
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalAchat();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('grandLivre',$data);
        //redirect("./welcome/balance");
                
    }
    

    public function verificationBalance()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalAchat();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('Balance',$data);
        //redirect("./welcome/balance");
                
    }

    public function verificationAchat()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeAchat();
        $val=$this->model->getJournalAchatValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationVente()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeVente();
        $val=$this->model->getJournalVenteValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage3',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationBanque()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeBanque();
        $val=$this->model->getJournalBanqueValider();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JourneauxAffichage2',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function total()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalAchat('Achat');
        $ver=$this->model->verificationSommeAchat();
        $valiny['journal'] = $rep;
        $this->load->view('Total',$valiny);
    }
    public function total1()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalVente('Vente');
        $this->model->verificationSommeVente();
        $valiny['journal'] = $rep;
        $this->load->view('Total1',$valiny);
    }
    public function total2()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalBanque('Banque');
        $ver=$this->model->verificationSommeBanque();
        $valiny['journal'] = $rep;
        $this->load->view('Total2',$valiny);
    }
  
    public function total3()
    {
        $this->load->model('JournalAchat_model', 'model');
        $val=$this->model->getTotal();
        $ver=$this->model->verificationSommeLivre();
        $data['journal'] = $val;
        $this->load->view('Total3',$data);

                
    }  

}

?>