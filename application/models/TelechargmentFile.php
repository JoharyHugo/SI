<?php 
/**
 * 
 */
class TelechargmentFile extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	// // fonction qui upload les fichiers et return son nom
	// public function upload_file($nom_champ) {

	//     $this->load->library('upload');
	    
	//     $config['upload_path'] = './uploads/';
	//     $config['allowed_types'] = 'gif|jpg|png|xlsx';
	//     $config['max_size'] = 100;
	//     $this->upload->initialize($config);
	    
	//     if (!$this->upload->do_upload($nom_champ)) {
	//         $error = array('error' => $this->upload->display_errors());
	//         // Gérer l'erreur ici
	//         // echo 'la';
	//         echo $error;
	//         return null;
	//     } else {
	//         $data = $this->upload->data();
	//         // Gérer le succès ici
	//         $file_nom = $data['file_name'];
	//         echo 'ici';
	//         return $file_nom;
	//     }
	// }

	public function upload_fichier($name, $input_name){
		// load base_url
		$this->load->helper('url');
		
		// Check form submit or not
		if ($name != null) {
			$data = array();
			$file = '%s';
			$file = sprintf($file,$input_name);
			if (!empty($_FILES[$file]['name'])) {
			
				// Set preference
				$config['upload_path'] = '../upload';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|xlsx|ods';
				$config['max_size'] = '100'; // max_size in kb
				$config['file_name'] = $_FILES[$file]['name'];
			
				// Load upload library
				$this->load->library('upload',$config);

				// File upload
				if($this->upload->do_upload('file')){

					// Get data about the file
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					return $filename;
				} else {
					echo 'error uploading';
				}

			} else {
				echo 'fichier introuvable';
			}
			
		} else {
			echo 'source inexistant';
		}
		
	}	
}
?>