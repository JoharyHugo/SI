<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller
{
    public function insertion()
    {
       $this->load->model('FrontOffice_model');
     $tab=$this->FrontOffice_model->getSpecifiqueObjet("casque",1,1); 
    
     echo $tab;
    
    }
}


?>