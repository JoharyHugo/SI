<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SaisiAchat extends CI_Controller{

  
    public function newAchat() {
        $this->load->model('SaisiAchat_model', 'model');

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
        $prix=$this->input->post('pu');
        $quantite=$this->input->post('Quantite');
        $credit=$this->input->post('credit');
        $this->model->insertNewAchat($jour,$numero,$piece,$compte,$tiers,$libelle,$prix,$quantite,$credit);
        //redirect("./welcome/index");
        $this->load->view('SaisieAchat');
    }

    public function achatAnalyse(){

      $this->load->model('SaisiAchat_model','model');
      $achat=$this->model->getAllAchat();
      $data['achat']=$achat;
      $this->load->view('TabAchatJournal', array('data' => $data));
    }


  
    public function verificationTotalAchat()
    {
        $this->load->model('SaisiAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeAchat();
            if($isBalanceEqual) {
                $val=$this->model->getAllAchat();
                $data['achat'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('TexteValidationAchat',$donnee);
               // $this->load->view('JourneauxAffichage2',$data);
            } else {
                echo "ecriture non valide";
            }
    }
    
    public function total1()
    {
        $this->load->model('SaisiAchat_model', 'model');
        $rep=$this->model->getAllAchat();
        $this->model->verificationSommeAchat();
        $valiny['journal'] = $rep;
        $this->load->view('TotalAchat',$valiny);
    }
}
?>