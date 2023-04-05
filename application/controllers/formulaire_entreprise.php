<?php
// Add opening PHP tag at the beginning of the file

defined('BASEPATH') OR exit('No direct script access allowed');

class Formulaire_entreprise extends CI_Controller {
	// Add opening brace for class definition

	public function __construct() {
		parent::__construct();
//		$this->load->model("formulair_societe");
		$this->load->library('form_validation');
	}

	public function ajout_entreprise() {
//		$this->load->helper('url');

          if($this->input->post('upload') != NULL ){
			$data = array();
			$data1 = array(); // Add a new array for the second file upload

			if (!empty($_FILES['logo']['name'])) {
				$config['upload_path'] = 'uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '100'; // max_size in kb
				$config['file_name'] = $_FILES['logo']['name'];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('logo')) {
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					$data['response'] = " " . $filename;
				} else {
					$data['response'] = 'failed';
				}
			} else {
				$data['response'] = 'failed';
			}

			if ($this->upload->do_upload('status')) {
				$uploadData = $this->upload->data();
				$filename1 = $uploadData['file_name'];
				$data1['reponse'] = " " . $filename1;
			} else {
				$data1['reponse'] = 'failed';
			}

			$this->load->view('accueil',$data);
			//$this->load->view('upload', $data);
			//$this->load->view('upload', $data1); // Load both views for the file uploads
		} else {
			$this->load->view('upload');
		}

		$this->load->model('formulair_societe', 'model');

		$nom = $this->input->post('nom');
		$objet = $this->input->post('objet');
		$siege = $this->input->post('siege');
		$adresse = $this->input->post('adresse');
		$mdp = $this->input->post('mdp');
		$dirigeant = $this->input->post('dirigeant');
		$fiscal = $this->input->post('fiscal');
		$statistique = $this->input->post('statistique');
		$registre = $this->input->post('registre');
		$status = $this->input->post('status');
		$debut = $this->input->post('debut');
		$devise = $this->input->post('devise');
		$equivalence = $this->input->post('equivalence');

		$id=null;
		// Pass both $data and $data1 to the model method
		$this->model->insertion($id,$nom, $objet, $siege, $adresse,  $dirigeant,$data['response'] , $mdp, $fiscal, $statistique, $registre, $data1['reponse'] , $debut, $devise, $equivalence);
	}


	
    public function getOneInfo($id)
    {
        $this->load->model('formulair_societe','model');
        $val=$this->model->getInfo($id);
        $data['datas'] = $val;
        $this->load->view('accueil',$data);   
    }

	public function getAllInfo()
    {
        $this->load->model('formulair_societe','model');
        $val=$this->model->getAllInfo();
        $data['reponse'] = $val;
        $this->load->view('tableau',$data);
    }
    
///controlleres mety
	
}
