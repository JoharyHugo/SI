<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Achat extends CI_Controller{

    public function formulaireAchatdetail(){
   $id= $this->input->get('id');
    $this->load->model('Achat_model','model');
    $info=$this->model->getAchatid($id);
    $nature=$this->model->getAllNature();
    $type=$this->model->getAllType();
    //$centre=$this->model->getAllCentre();
    $data['info']=$info;
    $data['nature']=$nature;
    $data['type']=$type;
   // $data['centre']=$centre;
    $this->load->view('FormulaireAchat',$data);

    }
    public function insertionChargedetail(){
        $idAchat=$this->input->post('idAchat');
        $idtype=$this->input->post('type');
        $idNature=$this->input->post('nature');
        $this->load->model('Achat_model','model');
        $this->model->insertdetailCharge($idAchat,$idNature,$idtype);
        $centre=$this->model->getAllCentre();
        $data['idAchat']=$idAchat;
        $data['centre']=$centre;
        if ($idNature==1) {
          $this->load->view('FormulaireCentreAchat',$data);
        }else{
          redirect("./welcome/accueil");
        }
        
    }
    public function achatAnalyse(){

      $this->load->model('saisiAchat_model','model');
      $achat=$this->model->getAllAchat();
      $data['achat']=$achat;
      $this->load->view('TabAchat',$data);
    }
    public function insertCentreCharge ()
    {
      $idAchat=$this->input->post('idAchat');
      $idCentre=$this->input->post('centre');
      $pourcentage=$this->input->post('pourcentage');
      $this->load->model('Achat_model','model');
      $achat=$this->model->getAchatid($idAchat);
      $prixtotal=($pourcentage*$achat['quantite']*$achat['prixUnitaire'])/100;
      $this->model->insertCentreAchat($idAchat,$idCentre,$pourcentage,$prixtotal);
      $data['idAchat']=$idAchat;
      $centre=$this->model->getAllCentre();
      $data['centre']=$centre;
      $this->load->view('FormulaireCentreAchat',$data);
    }
}
?>