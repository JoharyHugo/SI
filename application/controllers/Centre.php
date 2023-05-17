<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Centre extends CI_Controller {
 public function formulaireCentre()
 {
    $this->load->model('Achat_model','model');
    $centre=$this->model->getAllCentre();
    $data['centre']=$centre;
    $this->load->view('Centredetail',$data);
 }
 public function insertionCentredetail()
 {
   $idstructurel=$this->input->get('idstructurel');
   $idoperationel=$this->input->get('idoperationel');
   $cle=$this->input->get('cle');
   $this->load->model('Centre_model','model');
   $coutDirect=$this->model-> getSommeAchatCentre($idoperationel);
   $CentreStructurel=($cle*$coutDirect['CoutDirect'])/100;
   $total=$CentreStructurel+$coutDirect['CoutDirect'];
   $this->model->insertCentres($idstructurel,$idoperationel,$coutDirect['CoutDirect'],$cle,$CentreStructurel,$total);

   redirect("./centre/formulaireCentre");
 }
 public function getCentrestropr()
 {
  $this->load->model('Centre_model','model');
  $information=array();
  $idstructurel=$this->model->getAllidStructurel();
  for ($i=0; $i <count($idstructurel) ; $i++) { 
     $centre=$this->model->getCentredetail($idstructurel[$i]['idCentreStructurel']);
     $information[]=$centre;
  }
  $data['info']=$information;
  $this->load->view('HierarchieCentre',$data);
 }
}
 ?>