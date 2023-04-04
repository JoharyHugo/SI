<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Formulaire_entreprise extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	// fonction insert entreprise dans la base
	public function ajout_entreprise(){	

		// $this->load->model('TelechargmentFile');
		
		$nom = $this->input->get('nom');
		$objet = $this->input->get('objet');
		$Siege = $this->input->get('Siege');
		$adresse = $this->input->get('adresse');
		$logo = $this->upload_fichier(); //function upload file and return name file
		$mdp = $this->input->get('mdp');
		$dirigeant = $this->input->get('dirigeant');
		$fiscal = $this->input->get('fiscal');
		$statistique = $this->input->get('statistique');
		$registre = $this->input->get('registre');
		$status = $this->upload_fichier(); //function upload file and return file
		$debut = $this->input->get('debut');
		$devise = $this->input->get('devise');
		$equivalence = $this->input->get('equivalence');


		// $sql = "INSERT INTO INFO VALUES(null,$nom, $objet, $Siege, $adresse, $logo, $mdp, $dirigeant, $fiscal, $statistique, $registre, $status, $debut, $devise, $equivalence)";

		// echo $sql;

		// if ($logo != null || $status != null) {
		// 	echo "Erreur upload";
		// } else {
					
		// 	$this->load->model('Formulaire_societe');
		// 	$this->Formulaire_societe->insertion(null,$nom, $objet, $Siege, $adresse, $logo, $mdp, $dirigeant, $fiscal, $statistique, $registre, $status, $debut, $devise, $equivalence);
		// }
		
	
	}

	public function all_entreprise(){
		$this->load->model("Formulaire_societe");
		$result = $this->formulair_societe->selectAll();

		$this->load->view('',$result);
	}

	public function upload_fichier(){
		// load base_url
		$this->load->helper('url');
		// Check form submit or not
		if($this->input->get('logo') != NULL ){
			$data = array();
			if(!empty($_FILES['file']['name'])){
				// Set preference
				$config['upload_path'] = '../Upload/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '100'; // max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
				// Load upload library
				$this->load->library('upload',$config);
				// File upload
				if($this->upload->do_upload('file')){
					// Get data about the file
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					$data['response'] = 'successfully uploaded '.$filename;
					return $filename;
				} else {
					$data['response'] = 'failed';
				}
			} else {
				$data['response'] = 'failed';
			}
				// load view
				// $this->load->view('user_view',$data);
		} else {
			// load view
			//$this->load->view('user_view');
		}
	}
}
?>