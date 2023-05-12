<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    class CSV extends CI_Controller {
        /*public function import_xls_data() {
            $file_path = 'D/PCG-ECRITURE.xls';
            $table_name = 'tablecompte';
    
            $this->load->model('testCSV_model');
            $this->testCSV_model->import_data_from_xls($file_path, $table_name);
        }*/
		// public function import_xls_data() {
        //     $this->load->model('testCSV_model');
        //     $this->testCSV_model->import_xls_to_db();
        // }

        public function __construct(){
        	parent::__construct();
        	$this->load->helper('file');
        	// $this->load->helper('url');
    	}

        public function index(){
			// load base_url
			$this->load->helper('url');

			// Check form submit or not
			if($this->input->get('upload') != NULL ){
				$data = array();
				if(!empty($_FILES['file']['name'])){

					// Set preference
					$config['upload_path'] = 'C:\UwAmp\www\SI\application\Uploads';
					$config['allowed_types'] = 'csv';
					$config['max_size'] = '100'; // max_size in kb
					$config['file_name'] = $_FILES['file']['name'];
					
					// Load upload library
					$this->load->library('upload',$config);
					
					// File upload
					if($this->upload->do_upload('file')){

						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];$data['response'] = 'successfully uploaded '.$filename;
					} else {
						$data['response'] = 'failed';
					}
				} else {
					$data['response'] = 'failed';
				}

				// load view
				$this->load->view('UPLOAD_TEST',$data);
			} else {

				// load view
				$this->load->view('UPLOAD_TEST');
			}
		}

       

        public function csv_base(){
        	$csv_file_path = 'C:\Users\itu\Downloads\document S4\MR ROJO\systeme information\UwAmp\www\SI\application\Upload\PCG-ECRITURE.csv'; // Spécifiez le chemin d'accès complet du fichier CSV

	        $csv_content = read_file($csv_file_path); // Lire le contenu du fichier CSV

    	    // $csv_array = csv_to_array($csv_content); // Convertir le contenu du fichier CSV en un tableau associatif

        	// var_dump($csv_array); // Afficher le contenu du fichier CSV sous forme de tableau

        	$lines = explode(PHP_EOL, $csv_content); // Séparation des lignes

        	$size = 0;

			$csv_data = array();
			foreach($lines as $line) {
    			$csv_data[] = str_getcsv($line, ';'); // Conversion de chaque ligne en tableau
    			$size++;
			}

			for ($i = 1; $i < 134 ; $i++) { 
				$this->load->database();
    			$data = array(
    				'Numero' => $csv_data[$i][0],
    				'Nom' => $csv_data[$i][1],
    			);
    			$this->db->insert('Plan_comptable', $data);
				
			}
			echo "insertion mety";
		}
		
		
		public function csv_baseEcriture(){
        	$csv_file_path = 'C:\Users\itu\Downloads\document S4\MR ROJO\systeme information\UwAmp\www\SI\application\Upload\PCG-ECRITURE3.csv'; // Spécifiez le chemin d'accès complet du fichier CSV

	        $csv_content = read_file($csv_file_path); // Lire le contenu du fichier CSV

    	    // $csv_array = csv_to_array($csv_content); // Convertir le contenu du fichier CSV en un tableau associatif

        	// var_dump($csv_array); // Afficher le contenu du fichier CSV sous forme de tableau

        	$lines = explode(PHP_EOL, $csv_content); // Séparation des lignes

        	$size = 0;

			$csv_data = array();
			foreach($lines as $line) {
    			$csv_data[] = str_getcsv($line, ';'); // Conversion de chaque ligne en tableau
    			$size++;
			}

			for ($i = 1; $i < 48 ; $i++) { 
				$this->load->database();
    			$data = array(
    				'Date' => $csv_data[$i][0],
    				'ref_piece' => $csv_data[$i][1],
					'compte' => $csv_data[$i][2],
					'tiers' => $csv_data[$i][3],
					'intitule' => $csv_data[$i][4],
					'Libelle' => $csv_data[$i][5],
					'debit' => $csv_data[$i][6],
					'credit' => $csv_data[$i][7],
    			);
    			$this->db->insert('JournalTemporaireEcriture', $data);
				
			}
			echo "insertion mety";
		}
	}