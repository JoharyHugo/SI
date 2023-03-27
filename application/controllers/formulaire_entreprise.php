<?php 

defined('BASEPATH') OR exit('No direct script access allowed')
class Formilaire_control extends CI_Controller{
	public function __construct(){
		$this->load->model("formulair_societe");	
	}
	public function ajout_entreprise(){	
		//$this->formulair_societe->insertion();
	}
}
?>