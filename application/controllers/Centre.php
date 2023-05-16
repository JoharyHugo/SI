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
}
 ?>