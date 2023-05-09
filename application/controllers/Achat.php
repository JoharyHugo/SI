<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Achat extends CI_Controller{

    public function formulaireAchatdetail(){
     
    $this->load->model('Achat_model','model');
    $info=$this->model->getlastAchat();
    $nature=$this->model->getAllNature();
    $type=$this->model->getAllType();
    //$centre=$this->model->getAllCentre();
    $data['info']=$info;
    $data['nature']=$nature;
    $data['type']=$type;
   // $data['centre']=$centre;
    $this->load->view('FormulaireAchat',$data);

    }
    public function insertionCharge(){
        $idAchat=$this->input->post('idAchat');
        $idtype=$this->input->post('type');
        $idNature=$this->input->post('nature');
        $this->load->model('Achat_model','model');
        $this->model->insertdetailCharge($idAchat,$idNature,$idtype);
    }
}
?>