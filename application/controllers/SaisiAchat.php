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
        $type = $this->input->post('type');
        $devise = $this->input->post('devise');
        $debit = $this->input->post('debit');
        $credit = $this->input->post('credit');
        $montant=$this->input->post('montant');
        $prix=$this->input->post('pu');
        $quantite=$this->input->post('Quantite');
        $this->model->insertNewAchat($jour,$numero,$piece,$compte,$tiers,$libelle,$prix,$quantite,$devise,$montant);
        //redirect("./welcome/index");
        $this->load->view('SaisieAchat');
    }

    public function achatAnalyse(){

      $this->load->model('Achat_model','model');
      $achat=$this->model->getallAchat();
      $data['achat']=$achat;
      $this->load->view('TabAchat',$data);
    }
    public function insertCentreCharge ()
    {
      $idAchat=$this->input->post('idAchat');
      $idCentre=$this->input->post('centre');
      $pourcentage=$this->input->post('pourcentage');
      $this->load->model('Achat_model','model');
      $achat=$this->model->getdetailChargeId($idAchat);
      $prixtotal=($pourcentage*$achat['quantite']*$achat['prix'])/100;
      $this->model->insertCentreAchat($idAchat,$idCentre,$pourcentage,$prixtotal);
      $data['idAchat']=$idAchat;
      $centre=$this->model->getAllCentre();
      $data['centre']=$centre;
      $this->load->view('FormulaireCentreAchat',$data);
    }
}
?>